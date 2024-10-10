<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;


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

Route::get('/', action: [HomeController::class, 'index'])->name('home');
Route::get('/view-product/{id}', action: [HomeController::class, 'viewproduct'])->name('viewproduct');


Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');
Route::get('/store', function () {
    return view('frontend.store');
})->name('store');
Route::get('/dropzone', function () {
    return view('frontend.dropzone');
})->name('dropzone');


Route::get('/login', action: [AuthController::class, 'loginform'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerform'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('dashboard')->middleware('auth')->group(function () {

    //dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Product
    Route::get('/produk', [ProductController::class, 'index'])->name('dashboard.product');
    Route::get('/produk/tambah', [ProductController::class, 'addproduct'])->name('product.add');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/product/upload-image', [ProductController::class, 'uploadImage'])->name('product.upload-image');



    Route::get('/category', [CategoryController::class, 'index'])->name('dashboard.category');
    Route::get('/order', [OrderController::class, 'index'])->name('dashboard.order');
    Route::get('/setting', [SettingController::class, 'index'])->name('dashboard.setting');
});


