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

Route::resource('/category',\App\Http\Controllers\CategoryController::class)->parameters(['category'=> 'category:slug']);
Route::resource('/menu',\App\Http\Controllers\MenuController::class);
Route::resource('/table',\App\Http\Controllers\TableController::class);
//Route::resource('/categoryShow', \App\Http\Controllers\OrderController::class);
Route::resource('/cashier',\App\Http\Controllers\CashierController::class);
Route::resource('/invoice',\App\Http\Controllers\InvoiceController::class);
Route::get('/tableCheck',[\App\Http\Controllers\TableController::class,'tableCheck'])->name('tableCheck');
Route::get('/categoryShow',[\App\Http\Controllers\CategoryController::class,'categoryShow'])->name('categoryShow');



