<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Order;
use App\Models\Section;
use App\Models\Table;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        $orders = Order::all();
        return view('admin.dashboard', compact('tables', 'orders'));
    }
}
