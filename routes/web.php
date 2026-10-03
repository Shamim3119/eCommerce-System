<?php

 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

 

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');

Route::get('/', [HomeController::class, 'index']);

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');