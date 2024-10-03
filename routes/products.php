<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/product', [ProductController::class, 'showAddProductForm'])->name('products.productAdd_form');
Route::post('/product', [ProductController::class, 'addProduct'])->name('products.productAdd');

Route::get('products', [ProductController::class, 'product_list'])->name('products.product_list');
Route::get('products/{id}', [ProductController::class, 'product_details'])->name('products.product_details');