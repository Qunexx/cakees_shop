<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $products = Product::take(8)->get();;
        return view("main.index",compact('products'));
    }
}
