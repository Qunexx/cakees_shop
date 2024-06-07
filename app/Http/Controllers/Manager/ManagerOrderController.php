<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ManagerOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('manager.orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('manager.orders.edit', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Статус заказа успешно обновлен!');
    }


}
