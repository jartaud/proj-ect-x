<?php

namespace App\Http\Controllers\Frumbledingle;

use App\Models\Category;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('frumbledingle.categories', [
            'categories' => Category::select('id', 'name')->whereNull('parent_id')->get(),
        ]);
    }
}
