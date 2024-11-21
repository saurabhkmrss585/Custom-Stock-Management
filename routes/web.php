<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\addstockController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});
// Route::get('/admin_dashboard', function () {
//     return view('admin_stock_dashboard.admin_dashboard');
// });
Route::get('/admin_dashboard',[addstockcontroller::class,'admin_dashboard']);
Route::get('/add_stock', function () {
    return view('admin_stock_dashboard.addstock');
});

Route::get('/make_parts',[PartController::class,'make_parts']);

Route::get('/soldparts_fetch',[PartController::class,'soldparts_fetch']);
Route::get('/sales_tracking',[SellerController::class,'sales_tracking']);
Route::post('/add_parts', [PartController::class, 'add_parts'])->name('add.parts');
// Route::post('/check_quantity', [PartController::class, 'check_quantity'])->name('check.quantity');


Route::get('/low-stock-alerts', [addstockController::class, 'lowStockAlerts'])->name('lowStockAlerts');

Route::get('/low-stock-alerts1', [SellerController::class, 'lowStockAlerts1'])->name('lowStockAlerts1');

Route::get('/show_parts',[addstockController::class,'show_parts']);
Route::get('/available_parts',[SellerController::class,'available_parts']);
Route::get('/sale_parts',[SellerController::class,'sale_parts']);

// Route::get('/seller_dashboard', function () {
//     return view('seller_stock_dashboard.seller_dashboard');
// });
// Route::get('/low_stock', function () {
//     return view('seller_stock_dashboard.low_stock');
// });
// Route::get('/available_stock', function () {
//     return view('seller_stock_dashboard.available_stock');
// });

// Route::get('/sales_entry', function () {
//     return view('seller_stock_dashboard.sales_entry');
// });
// Route::get('/sales_tracking', function () {
//     return view('seller_stock_dashboard.sales_tracking');
// });
Route::get('/stock_details',[SellerController::class,'stock_details']);
Route::get('/seller_dashboard',[SellerController::class,'seller_dashboard']);


Route::post('/add_update_pro/{id}' , [addstockController::class, 'add_update_pro' ]);
Route::post('/store_stock' , [addstockController::class, 'store_stock' ]);
Route::get('/show_stock',[addstockController::class,'show_stock']);
Route::get('/delete_stock/{id}',[addstockController::class,'delete_stock']);
Route::get('/update_stock/{id}',[addstockController::class,'update_stock']);
Route::get('/sale_track',[addstockController::class,'sale_track']);
Route::get('/available_stock',[SellerController::class,'available_stock']);
Route::get('/sales_entry',[SellerController::class,'sales_entry']);
Route::post('/sold_stock',[SellerController::class,'sold_stock']);
Route::post('/sold_parts',[partController::class,'sold_parts']);



Route::get('/generate-invoice/{soldStockId}', [InvoiceController::class, 'generateInvoice'])->name('generate-invoice');
Route::get('/generate-invoice-parts/{salePartId}', [InvoiceController::class, 'generateInvoice_parts'])->name('generate-invoice-parts');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        // Role-based redirection logic
        if ($user->role === 'admin') {
            return redirect()->intended('/admin_dashboard');
        } elseif ($user->role === 'seller') {
            return redirect()->intended('/seller_dashboard');
        }

        return view('dashboard');
    })->name('dashboard');
});
