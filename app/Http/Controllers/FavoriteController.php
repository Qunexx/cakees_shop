<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->id())->get();
        return view('favorite.index', compact('favorites'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Favorite::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
        ]);

        return back()->with('success', 'Товар добавлен в избранное.');
    }

    public function remove($id)
    {
        $favorite = Favorite::where('user_id',  auth()->id())->where('product_id', $id)->first();
        if ($favorite) {
            $favorite->delete();
            return back()->with('success', 'Товар удалён из избранного.');
        }

        return back()->with('error', 'Товар не найден в избранном.');
    }

}

