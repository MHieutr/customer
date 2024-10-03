<?php

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('register');
// });

// Route::get('/', function () {
//     return redirect()->route('customers.login_form');
// });

// Route::get('/login', [CustomerController::class, 'showLoginForm'])->name('customers.login_form');
// Route::post('/login', [CustomerController::class, 'login'])->name('customers.login');

// Route::get('/register', [CustomerController::class, 'showRegisterForm'])->name('customers.register_form');
// Route::post('/register', [CustomerController::class, 'register'])->name('customers.register');

// Route::get('/customers', [CustomerController::class, 'list'])->name('customers.list');
// Route::get('/customers/{id}', [CustomerController::class, 'details'])->name('customers.details');

Route::get('/product', [ProductController::class, 'showAddProductForm'])->name('products.productAdd_form');
Route::post('/product', [ProductController::class, 'addProduct'])->name('products.productAdd');

Route::get('products', [ProductController::class, 'product_list'])->name('products.product_list');
Route::get('products/{id}', [ProductController::class, 'product_details'])->name('products.product_details');






