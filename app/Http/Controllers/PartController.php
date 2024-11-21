<?php

namespace App\Http\Controllers;

use App\Models\AddStock;
use App\Models\MakePart;
use App\Models\Make_Part;
use App\Models\SalePart;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function make_parts()
    {
        $getstock = AddStock::all();
        return view('admin_stock_dashboard.make_parts', compact('getstock'));
    }
    public function add_parts(Request $request)
{
    $validatedData = $request->validate([
        'part_name' => 'required|string|max:50',
        'part_quantity' => 'required|integer|min:1',
        'part_price' => 'required|numeric|min:0',
        'selected_products' => 'required|json',
    ]);

    $selectedProducts = json_decode($validatedData['selected_products'], true);
    $soldProducts = [];

    // Loop through each product in selected products
    foreach ($selectedProducts as $product) {
        $productName = $product['name'];
        $quantityRequested = $product['quantity'];

        // Find the stock record by product name
        $stock = AddStock::where('productName', $productName)->first();
        if ($stock) {
            // Check if there is enough stock
            if ($stock->quantity >= $quantityRequested) {
                // Deduct the quantity
                $stock->quantity -= $quantityRequested;
                $stock->save(); // Save the updated stock

                // Add product to sold products array
                $soldProducts[] = [
                    'name' => $productName,
                    'quantity' => $quantityRequested,
                ];
            } else {
                return back()->withErrors("Insufficient stock for {$productName}");
            }
        } else {
            return back()->withErrors("Product {$productName} not found in stock.");
        }
    }

    // Save the part entry
    MakePart::create([
        'part_name' => $validatedData['part_name'],
        'part_quantity' => $validatedData['part_quantity'],
        'part_price' => $validatedData['part_price'],
        'product_name' => json_encode(array_column($soldProducts, 'name')), // Store product names in JSON format
        'products' => json_encode($soldProducts), // Store sold products in JSON format
    ]);

    return redirect()->back()->with('success', 'Part created successfully!');
}

//function for part selling
public function sold_parts(Request $request)
{
    $validatedData = $request->validate([
        'saleDate' => 'required|date',
        'selected_products' => 'required|json'
    ]);

    $selectedProducts = json_decode($validatedData['selected_products'], true);
    $soldProducts = [];
    $totalSalePrice = 0;

    foreach ($selectedProducts as $product) {
        $stock = MakePart::where('part_name', $product['name'])->first();
       
        if ($stock) {
            if ($stock->part_quantity >= $product['quantity']) {
                $stock->part_quantity -= $product['quantity'];
                $stock->save();

                // Calculate the total price for this product (price * quantity)
                $productTotalPrice = $product['price'] * $product['quantity'];

                // Add product details including calculated total price for this item
                $soldProducts[] = [
                    'name' => $product['name'],
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                    'total' => $productTotalPrice, // Total for this item
                ];

                // Add the total price for this product to the overall total
                $totalSalePrice += $productTotalPrice;
            } else {
                return back()->withErrors("Insufficient stock for {$product['name']}");
            }
        } else {
            return back()->withErrors("Product {$product['name']} not found in stock.");
        }
    }

    try {
        $salePart=SalePart::create([
            'saleDate' => $validatedData['saleDate'],
            'products' => json_encode($soldProducts),
            'total_price' => $totalSalePrice // Store the total sale price
        ]);
    } catch (\Exception $e) {
        return back()->withErrors("Error storing data: " . $e->getMessage());
    }

    return redirect()->route('generate-invoice-parts', ['salePartId' => $salePart->id]);
}



public function soldparts_fetch(){
    $soldparts_fetch=SalePart::latest()->limit(10)->get();
    return view("admin_stock_dashboard.soldparts",compact('soldparts_fetch'));
}



}

