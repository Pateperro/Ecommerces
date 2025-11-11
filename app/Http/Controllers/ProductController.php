<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    // en los controladores es donde va la logica para no enfrascar el codigo y no generar sobrecargos


    function index()
    {
            return view('products.index');
    }

    function create()
    {
            return view('products.create');
    }

    function show($id, $category = null)
    {  

        return view('products.show');

    }
}