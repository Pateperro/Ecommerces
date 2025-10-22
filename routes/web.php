<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('products')->controller(ProductController::class)->group(function(){  // sirve para agrupar un rutas y asignarles un prefijo y demas parametros
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}/{category?}', 'show');
});

