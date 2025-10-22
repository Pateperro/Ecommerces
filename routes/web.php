<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function(){
    return "Listado de productos";
});

Route::get('products/create', function(){
    return "formulario de creacion de productos";
});

Route::get('products/{id}/{category?}', function($id, $category = null){
    // el ? sirve para hacer opcional, si no se pasa el valor por defecto es el que se le asigne

    if($category != null) {
        return "formulario de creacion de productos: " . $id . " de la categoria: " . $category;
    } else {
        return "formulario de creacion de productos: " . $id;
    }

    
});

