<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;

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
    return view('frontend.home');
})->name('home');
Route::get('/shop', function () {
    return view('frontend.shop', ['title' => 'Shop']);
})->name('shop');
Route::get('/store', function () {
    return view('frontend.store', ['title' => 'Store']);
})->name('store');



Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/product', [ProductController::class, 'index'])->name('dashboard.product');
    Route::get('/category', [CategoryController::class, 'index'])->name('dashboard.category');
    Route::get('/order', [OrderController::class, 'index'])->name('dashboard.order');
    Route::get('/setting', [SettingController::class, 'index'])->name('dashboard.setting');
});


