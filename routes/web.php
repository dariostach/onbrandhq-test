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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\ProductController::class, 'create_product'])->name('create_product');
Route::get('/home/approve', [App\Http\Controllers\ProductController::class, 'approve'])->name('approve');
Route::get('/home/see_approved', [App\Http\Controllers\ProductController::class, 'see_approved'])->name('see_approved');
