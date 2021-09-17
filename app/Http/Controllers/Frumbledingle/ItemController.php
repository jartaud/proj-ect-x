<?php

namespace App\Http\Controllers\Frumbledingle;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Routing\Controller;

class ItemController extends Controller
{
    public function index()
    {
        return view('frumbledingle.items', [
            'locations' => Location::select('id', 'name')->get()->toArray(),
            'categories' => Category::select('id', 'parent_id', 'name')
                ->with('childrenRecursive:id,parent_id,name')
                ->whereNull('parent_id')
                ->get(),
        ]);
    }
}
