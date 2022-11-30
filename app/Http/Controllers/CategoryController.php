<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('children_categories')
            ->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('categories.create', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('categories.index');
    }
}
