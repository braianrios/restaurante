<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Dish;
use App\Models\Table;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $tables = Table::all();
        $dishes = Dish::all();
        return view('orders.create', compact('tables', 'dishes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_number' => 'required|integer',
            'dishes' => 'required|array',
            'dishes.*.dish_id' => 'required|exists:dishes,id',
            'dishes.*.quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'table_number' => $request->table_number,
            'status' => 'Pending',
            'total_price' => 0, // Calculamos después
        ]);

        $totalPrice = 0;

        foreach ($request->dishes as $dish) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'dish_id' => $dish['dish_id'],
                'quantity' => $dish['quantity'],
            ]);
            $totalPrice += $orderItem->dish->price * $dish['quantity'];
        }

        $order->total_price = $totalPrice;
        $order->save();

        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function updateStatus($id, $status)
    {
        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->save();
        return redirect()->route('orders.index');
    }
}
