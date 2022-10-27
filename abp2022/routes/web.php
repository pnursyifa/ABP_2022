<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\OrderController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::GET('/', [LandingPageController::class, 'index']);

Route::GET('/product', [ProductController::class, 'index']);
Route::GET('/product/add', [ProductController::class, 'create']);
Route::POST('/product/store', [ProductController::class, 'store']);

Route::GET('/customer', [CustomerController::class, 'index']);

Route::GET('/gudang', [GudangController::class, 'index']);

Route::GET('/merk', [MerkController::class, 'index']);

Route::GET('/order', [OrderController::class, 'index']);