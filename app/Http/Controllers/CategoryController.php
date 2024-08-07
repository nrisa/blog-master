<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('cms', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categori' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('cms');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'categori' => 'required|string|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('cms');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('cms');
    }
}
