<?php

namespace App\Http\Controllers;

use App\Models\AddStock;
use App\Models\MakePart;
use App\Models\SalePart;
use App\Models\SoldStock;
use Illuminate\Http\Request;

class addstockController extends Controller
{
  public function store_stock(Request $request)
  {
    $stock = new AddStock();
    $stock->productName = $request->input('productName');
    $stock->productType = $request->input('productType');
    $stock->partNumber = $request->input('partNumber');
    $stock->quantity = $request->input('quantity');
    $stock->price  = $request->input('price');
    $stock->save();
    session()->flash('stockstatus', 'Stock has been added successfully');
    return redirect()->back();
  }
  public function show_stock()
  {
    $show = AddStock::all();
    return view('admin_stock_dashboard.show_stock', compact('show'));
  }

  public function delete_stock($id)
  {
    $stockdelete = AddStock::find($id);
    $stockdelete->delete();
    return redirect()->back();
  }

  public function update_stock($id)
  {
    $stockupdate = AddStock::find($id);
    return view('admin_stock_dashboard.update_stock' , compact('stockupdate'));
  }


  public function add_update_pro(Request $request , $id)
  {
    $u_stock = AddStock::find($id);
    $u_stock->productName = $request->input('productName');
    $u_stock->productType = $request->input('productType');
    $u_stock->partNumber = $request->input('partNumber');
    $u_stock->quantity = $request->input('quantity');
    $u_stock->price  = $request->input('price');
    $u_stock->save();
    session()->flash('updatestatus', 'Stock has been updated successfully');
    return redirect('/show_stock');
  }

  public function sale_track(){
    $seller_update=SoldStock::latest()->limit(10)->get();
    return view('admin_stock_dashboard.sold_stock',compact('seller_update'));
  }
  public function show_parts (){
    $show=MakePart::latest()->limit(10)->get();
    return view('admin_stock_dashboard.available_parts',compact('show'));
  }


  public function lowStockAlerts()
  {
      // Retrieve products with quantity at or below 10
      $lowStockProducts = AddStock::where('quantity', '<=', 10)->get();

      return view('admin_stock_dashboard.stock_alert', compact('lowStockProducts'));
  }

  public function admin_dashboard(){
    $lowStockProducts = AddStock::where('quantity', '<=', 5)->limit(2)->get();
    $totalQuantity = AddStock::sum('quantity');
    $totallowquantity=AddStock::where('quantity', '<=', 5)->limit(4)->sum('quantity');
    $totalparts=MakePart::sum('part_quantity');
   $totalparts=SalePart::count('id');
   $totalcomponent=SoldStock::count('id');
   $totalsales=$totalparts+$totalcomponent;
    return view('admin_stock_dashboard.admin_dashboard',compact('lowStockProducts','totalQuantity','totallowquantity','totalparts','totalsales'));
  }


}
