<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('reviews')->findOrFail($id);

        return view('product.show', compact('product'));
    }


}
