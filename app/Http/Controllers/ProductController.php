<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    function show($id, $category = null) 
    {

        return view('products.show');
    }


    function store(Request $request){
        dd($request->all());

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('categary');
        $product->brand_id = $request->get('brand');

        $product->save();

        return "Save Product!!!";
 
    }

}
