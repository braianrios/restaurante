<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }

    public function create()
    {
        return view('tables.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_id' => 'required|string',
            'total_price_id' => 'nullable|numeric',
            'dishes_name' => 'nullable|string',
            'dishes_description' => 'nullable|string',
        ]);

        Table::create($request->all());
        return redirect()->route('tables.index');
    }

    public function show($id)
    {
        $table = Table::findOrFail($id);
        return view('tables.show', compact('table'));
    }
}
