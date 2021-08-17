<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('user-dashboard', [UserController::class, 'index'])
    ->name('user-dashboard')
    ->middleware('auth');

Route::get('admin-dashboard', [AdminController::class, 'index'])
    ->name('admin-dashboard')
    ->middleware('auth');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get("/product/create", [ProductController::class, 'create'])
    ->name('add-product')
    ->middleware('auth');

Route::post('/product/store', [ProductController::class, 'store'])
    ->name('store-product')
    ->middleware('auth');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])
    ->name('delete-product')
    ->middleware('auth');

Route::get('/product/{id}', [ProductController::class, 'show'])
    ->name('product');

Route::put('/product/{id}', [ProductController::class, 'update'])
    ->name('product')
    ->middleware('auth');

Route::post('/purchase-confirmation/{id}', [PurchaseController::class, 'store'])
    ->name('purchase-confirmation')
    ->middleware('auth');
