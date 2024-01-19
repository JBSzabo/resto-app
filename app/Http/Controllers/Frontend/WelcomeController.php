<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function thankyou()
    {
        return view('thankyou');
    }
}
