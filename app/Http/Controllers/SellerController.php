<?php

namespace App\Http\Controllers;

use App\Models\AddStock;
use App\Models\MakePart;
use App\Models\SalePart;
use App\Models\SoldStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SellerController extends Controller
{
    public function available_stock(){
        $avail_stock = AddStock::all();
        return view('seller_stock_dashboard.available_stock',compact('avail_stock'));
    }

    public function sales_entry(){
        $stockdata=AddStock::all();
        return view('seller_stock_dashboard.sales_entry',compact('stockdata'));
    }
    public function sold_stock(Request $request)
    {
        $validatedData = $request->validate([
            'saleDate' => 'required|date',
            'selected_products' => 'required|json'
        ]);

        $selectedProducts = json_decode($validatedData['selected_products'], true);
        $soldProducts = []; // Array to hold sold product details
        $totalSaleAmount = 0;

        foreach ($selectedProducts as $product) {
            $stock = AddStock::where('productName', $product['name'])->first();
            if ($stock->quantity <= 0) {
                return back()->withErrors("{$product['name']} is out of stock and cannot be sold.");
            }
            if ($stock) {
                if ($stock->quantity >= $product['quantity']) {
                    // Deduct the quantity and calculate the total price for this product
                    $stock->quantity -= $product['quantity'];
                    $stock->save();

                    $itemTotalPrice = $product['quantity'] * $product['price'];
                    $totalSaleAmount += $itemTotalPrice;

                    $soldProducts[] = [
                        'name' => $product['name'],
                        'quantity' => $product['quantity'],
                        'price' => $product['price'],
                        'total_price' => $itemTotalPrice,
                    ];
                } else {
                    return back()->withErrors("Insufficient stock for {$product['name']}");
                }
            }
        }

        $soldStock=SoldStock::create([
            'saleDate' => $validatedData['saleDate'],
            'products' => json_encode($soldProducts),
            'total_amount' => $totalSaleAmount,
        ]);

        return redirect()->route('generate-invoice', ['soldStockId' => $soldStock->id]);
    }




    public function stock_details(){
        $stock_details = SoldStock::latest()->limit(10)->get();


        return view('seller_stock_dashboard.sales_tracking',compact('stock_details'));
    }
    public function sale_parts(){
        $fetch_parts=MakePart::latest()->limit(10)->get();
        return view('seller_stock_dashboard.sale_parts',compact('fetch_parts'));
    }
    public function available_parts (){
        $show=MakePart::latest()->limit(10)->get();
        return view('seller_stock_dashboard.available_parts',compact('show'));
      }

      public function lowStockAlerts1()
      {
          // Retrieve products with quantity at or below 10
          $lowStockProducts1 = AddStock::where('quantity', '<=', 10)->get();

          return view('seller_stock_dashboard.low_stock', compact('lowStockProducts1'));
      }

      public function sales_tracking(){
        $soldparts_fetch=SalePart::latest()->limit(10)->get();
        return view('seller_stock_dashboard.sales_tracking',compact('soldparts_fetch'));
    }

    public function seller_dashboard(){
        $lowStockProducts = AddStock::where('quantity', '<=', 5)->limit(2)->get();
        $totalQuantity = AddStock::sum('quantity');
        $totallowquantity=AddStock::where('quantity', '<=', 5)->limit(4)->sum('quantity');
        $totalparts=MakePart::sum('part_quantity');
       $totalparts=SalePart::count('id');
       $totalcomponent=SoldStock::count('id');
       $totalsales=$totalparts+$totalcomponent;
        return view('seller_stock_dashboard.seller_dashboard',compact('lowStockProducts','totalQuantity','totallowquantity','totalparts','totalsales'));
      }

}
