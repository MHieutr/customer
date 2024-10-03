<?php

use App\Http\Controllers\CustomerController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('customers.login_form');
});

Route::get('/login', [CustomerController::class, 'showLoginForm'])->name('customers.login_form');
Route::post('/login', [CustomerController::class, 'login'])->name('customers.login');

Route::get('/register', [CustomerController::class, 'showRegisterForm'])->name('customers.register_form');
Route::post('/register', [CustomerController::class, 'register'])->name('customers.register');

Route::get('/customers', [CustomerController::class, 'list'])->name('customers.list');
Route::get('/customers/{id}', [CustomerController::class, 'details'])->name('customers.details');