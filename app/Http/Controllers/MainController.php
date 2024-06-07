<?php

namespace App\Http\Controllers;

use App\Models\NewsSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $products = Product::take(8)->get();;
        $sliders = NewsSlider::all();
        return view("main.index",compact('products','sliders'));
    }
}
