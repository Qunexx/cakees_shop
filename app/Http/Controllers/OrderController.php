<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::where('user_id', Auth::id())->get();
        return view('order.index', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'payment_method' => 'required|string|max:255',
            'comment' => 'required|nullable'
        ]);


        $user = auth()->user();

        if ($user->cart) {
            $cartItems = $user->cart->cartItems;

            $totalPrice = 0;
            foreach ($cartItems as $item) {
                $totalPrice += $item->quantity * $item->product->price;
            }
        } else {
            $totalPrice = 0;
            $cartItems = collect();
        }


        // Создание заказа
        $order = Order::create([
            'user_id' => $user->id,
            'address' => $request->address,
            'comment' => $request->comment,
            'payment_method' => $request->payment_method,
            'status' => 'considering',
            'total_price' => $totalPrice,
        ]);

        foreach ($cartItems as $item) {
            $order->items()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        $user->cart->cartitems()->delete();

        return redirect()->route('orders.index')->with('success', 'Заказ успешно сформирован, вы можете увидеть его статус на странице с заказами.');
    }







}
