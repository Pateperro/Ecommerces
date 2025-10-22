<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    // en los controladores es donde va la logica para no enfrascar el codigo y no generar sobrecargos


    function index(){
            return "Listado de productos";
    }

    function create(){
            return "Formulario de creacion de productos";
    }

    function show($id, $category = null){  
         // el ? sirve para hacer opcional, si no se pasa el valor por defecto es el que se le asigne 
    if($category != null) {
        return "formulario de creacion de productos: " . $id . " de la categoria: " . $category;
    } else {
        return "formulario de creacion de productos: " . $id;
    }
    }

}
