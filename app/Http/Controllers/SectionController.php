<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        return view('sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image',
        ]);

        Section::create($request->all());
        return redirect()->route('sections.index');
    }

    public function show($id)
    {
        $section = Section::findOrFail($id);
        return view('sections.show', compact('section'));
    }
}
