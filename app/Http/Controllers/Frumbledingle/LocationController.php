<?php

namespace App\Http\Controllers\Frumbledingle;

use Illuminate\Routing\Controller;

class LocationController extends Controller
{
    public function index()
    {
        return view('frumbledingle.locations');
    }
}
