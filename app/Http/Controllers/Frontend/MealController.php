<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class MealController extends Controller
{
    public function index()
    {
        return view('meals.index');
    }
}
