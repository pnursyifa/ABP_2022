<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    LandingPageController,
    CustomerController,
    GudangController,
    MerkController,
    OrderController,
};

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

Route::GET('/', [LandingPageController::class, 'index']);

/* Route::resource('/product', ProductController::class); */

Route::resource('product', ProductController::class, ['names' => 'product']);

Route::GET('/customer', [CustomerController::class, 'index']);

Route::resource('gudang', GudangController::class);

Route::GET('/merk', [MerkController::class, 'index']);
Route::GET('/merk/add', [MerkController::class, 'create']);
Route::POST('/merk/store', [MerkController::class, 'store']);

Route::GET('/order', [OrderController::class, 'index']);