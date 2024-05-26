<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::id())->get();
        return view('favorite.index', compact('favorites'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Favorite::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return back()->with('success', 'Product added to favorites.');
    }

    public function remove($id)
    {
        $favorite = Favorite::where('user_id', Auth::id())->where('product_id', $id)->firstOrFail();
        $favorite->delete();

        return back()->with('success', 'Product removed from favorites.');
    }
}

