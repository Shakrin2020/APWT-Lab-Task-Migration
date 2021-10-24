<?php

use Illuminate\Support\Facades\Route;
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
//Basic Routes
Route::get('/', [ProductController::class,'home'])->name('home');


//product routes
Route::get('/product/list',[ProductController::class,'list'])->name('products.list');
Route::get('/product/details',[ProductController::class,'details'])->name('products.details');
Route::get('/product/edit/{id}/{name}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('products.edit');
Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('products.create');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);



