<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = auth()->user()->cart()->with('cartitems.product')->first();
        if (!$cart || !$cart->hasItems()) {
            return view('cart.empty');
        }
        $cartItems = $cart->cartitems;
        $totalPrice = $cartItems->reduce(function ($carry, $item) {
            return $carry + $item->quantity * $item->product->price;
        }, 0);
        return view('cart.index', compact('cart', 'cartItems', 'totalPrice'));

    }

    public function add(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('products.index')->withErrors('Чтобы добавить изделие в корзину, необходимо авторизоваться или зарегистрироваться.');
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $user = auth()->user();
        $userid = auth()->user()->id;


        $cart = $user->cart()->firstOrCreate(['user_id' => $userid]);

        $item = $cart->cartitems()->where('product_id', $request->product_id)->first();

        if ($item) {
            $item->increment('quantity');
        } else {
            $cart->cartitems()->create([
                'product_id' => $request->product_id,
                'quantity' => 1,
            ]);
        }
        return back()->with('success', 'Изделие добавлено в корзину.');
    }


    public function destroy($id)
    {
        $item = CartItem::findOrFail($id);
        if (auth()->id() !== $item->cart->user_id) {
            return redirect()->route('cart.index')->withErrors('Вы не можете этого сделать');
        }
        $item->delete();

        $totalPrice = auth()->user()->cart->cartitems()->get()->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });

        return back()->with([
            'success' => 'Изделие удалено из корзины.',
            'totalPrice' => number_format($totalPrice, 2)
        ]);
    }


    public function checkout()
    {
        $cart = auth()->user()->cart()->with('cartitems.product')->first();
        if (!$cart || !$cart->hasItems()) {
            return view('cart.empty');
        }
        $cartItems = $cart->cartitems;
        $totalPrice = $cartItems->reduce(function ($carry, $item) {
            return $carry + $item->quantity * $item->product->price;
        }, 0);
        return view('order.checkout', compact('cart', 'cartItems', 'totalPrice'));
    }


}
