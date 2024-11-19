<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Section;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('dishes.create', compact('sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'section_id' => 'required|exists:sections,id',
        ]);

        Dish::create($request->all());
        return redirect()->route('dishes.index');
    }

    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        return view('dishes.show', compact('dish'));
    }

    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $sections = Section::all();
        return view('dishes.edit', compact('dish', 'sections'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'section_id' => 'required|exists:sections,id',
        ]);

        $dish = Dish::findOrFail($id);
        $dish->update($request->all());
        return redirect()->route('dishes.index');
    }

    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('dishes.index');
    }
}
