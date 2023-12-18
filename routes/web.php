<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderItemsController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'home']);

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/create',[UserController::class,'store']);
Route::get('/users/{user}', [UserController::class,'edit']);
Route::post('/users/{user}', [UserController::class,'update']);
Route::delete('/users/delete/{user}',[UserController::class,'delete']);


Route::get('/products', [ProductController::class, 'product'])->name('product');
Route::get('/products/create', [ProductController::class,'create']);
Route::post('/products/create',[ProductController::class,'store']);

Route::get('/orders', [OrdersController::class, 'orders']);

Route::get('/order_items', [OrderItemsController::class, 'orderitems'])->name('orderitems');

