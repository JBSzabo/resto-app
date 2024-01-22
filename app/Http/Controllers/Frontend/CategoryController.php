<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show($name)
    {
        $category= Category::all()->where('name', $name)->first();
        return view('categories.show', compact('category'));
    }
}
