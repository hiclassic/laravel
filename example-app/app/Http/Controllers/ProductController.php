<?php

n// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('name', 'price'));
        $product->categories()->attach($request->category_ids);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
