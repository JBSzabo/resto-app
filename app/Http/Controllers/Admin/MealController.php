<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MealStoreRequest;
use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = Meal::all();

        return view('admin.meals.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.meals.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MealStoreRequest $request)
    {
        $image = $request->file('image')->store('public/meals');

        $meal = Meal::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
        ]);

        if ($request->has('category')) {
            $meal->categories()->attach($request->category);
        }

        return to_route('admin.meals.index')->with('success', 'Jelo kreirano');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meal $meal)
    {
        $categories = Category::all();

        return view('admin.meals.edit', compact('meal', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $image = $meal->image;
        if ($request->hasFile('image')) {
            Storage::delete($meal->image);
            $image = $request->file('image')->store('public/meals');
        }

        $meal->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image,
        ]);

        if ($request->has('category')) {
            $meal->categories()->sync($request->category);
        }

        return to_route('admin.meals.index')->with('success', 'Jelo ažurirana');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        Storage::delete($meal->image);
        //$meal->categories->detach();
        $meal->delete();

        return to_route('admin.meals.index')->with('success', 'Jelo izbrisano');
    }
}
