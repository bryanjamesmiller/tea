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
    return view('welcome');
});

Route::get('new', function () {
    return view('new');
});

Route::get('sales', function () {
    return view('sales');
});

Route::get('customers', function () {
        return view('customers');
});

Route::get('reorder', function () {
    return view('reorder');
});

Route::resource("order", \App\Http\Controllers\OrderController::class);
Route::resource("ingredient", \App\Http\Controllers\IngredientController::class);
Route::resource("product", \App\Http\Controllers\ProductController::class);
Route::resource("ingredient_product", \App\Http\Controllers\IngredientProductController::class);
