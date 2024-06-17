<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineStockController;

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
    return view('auth.login');
});

// Dashboard Controller Route
// Route::get('admin/dashboard',[DashboardController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Middleware group route for security
Route::group(['middleware' => 'auth'], function () {
    // Dahsboard Route
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    // Customer resourse Route
    Route::resource('admin/customers', CustomerController::class);

    // Medicines Resourse Route
    Route::resource('admin/medicines', MedicineController::class);

    // Medicine_Stock Resourse Route
    Route::resource('admin/medicines_stock', MedicineStockController::class);

    // Suppliers Resourse Route
    Route::resource('admin/suppliers', SupplierController::class);

    // Invoices Resourse Route
    Route::resource('admin/invoices', InvoiceController::class);

    // Purchases Resourse Route
    Route::resource('admin/purchases', PurchaseController::class);
});
