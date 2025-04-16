<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = category::orderBy('id', 'ASC')->get();

        return view('category.index', compact('categories'));
    }

    public function add() {

        return view('category.add');
    }

    public function store(Request $request) {
        $request->validate([
            'name' =>'required|string|max:255',
            'description' =>'required|nullable|string'
        ]);

        $categories = new category();
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();

        return redirect()->route('category.index')->with('success', 'Category added successfully');
    }
}
