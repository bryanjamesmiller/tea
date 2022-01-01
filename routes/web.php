<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route("sale.create"));
});

Route::get('new', function () {
    return view('new');
});

Route::get('sales', function () {
    return view('sales');
});

Route::get('customer', function () {
        return view('customer');
});

Route::get('reorder', function () {
    return view('reorder');
});

Route::resource("order", \App\Http\Controllers\OrderController::class);
Route::resource("ingredient", \App\Http\Controllers\IngredientController::class);
Route::resource("product", \App\Http\Controllers\ProductController::class);
Route::resource("ingredient_product", \App\Http\Controllers\IngredientProductController::class);
Route::resource("sale", \App\Http\Controllers\SaleController::class);
Route::resource("product_sale", \App\Http\Controllers\ProductSaleController::class);
Route::resource("customer", \App\Http\Controllers\CustomerController::class);


