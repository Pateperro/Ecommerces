<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Ruta principal → home.blade.php
Route::get('/', function () {
    return view('home');
})->name('home');

// Grupo de rutas de productos
Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::get('/{id}/{category?}', 'show')->name('products.show');
});


