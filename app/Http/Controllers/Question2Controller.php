<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class Question2Controller extends Controller
{
    public function index()
    {
        // raw query
        $data = DB::select("select users.name as user_name, users.id, clients.name as client_name from users left join clients on users.client_id = clients.id");

        // right way
        $shiningData = User::with('client:id,name')->select('name', 'id', 'client_id')->get();

        return view('question-2', compact('data', 'shiningData'));
    }
}
