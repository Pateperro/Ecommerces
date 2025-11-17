<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    function store(Request $request)
    {
        // Validaciones
        $request->validate([    
            "name" => 'required|string|max:255',
            "description" => 'nullable|string',
            "price" => 'required|numric|min:0|max:999999.99',
            "category" => 'required|exists:categories,id',
            "brand" => 'required|exists:brand,id'
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category'); // corregido typo 'categary'
        $product->brand_id = $request->get('brand');

        $product->save();

        return redirect()->route('admin.products.table');
    }

    public function table()
    {
        $products = Product::with(['category', 'brand'])->orderBy('id', 'desc')->paginate(10);

        return view('products.table', [
            'products' => $products
        ]);
    }
}
