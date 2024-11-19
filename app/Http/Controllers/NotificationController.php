<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('notifications.index', compact('notifications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'table_number' => 'required|integer',
        ]);

        Notification::create($request->all());
        return redirect()->route('notifications.index');
    }
}
