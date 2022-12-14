<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

// admin all raoute

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/stock', 'stock')->name('admin.stock')->middleware(['auth','verified']);
    Route::get('/admin/test', 'test');

});

Route::controller(ProductController::class)->group(function () {
    Route::post('/admin/stock/add', 'addNewProduct')->name('product.add');
    Route::get('/admin/stock/add', 'addProductForm')->name('product.form');
});





require __DIR__.'/auth.php';
