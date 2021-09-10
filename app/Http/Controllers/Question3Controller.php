<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class Question3Controller extends Controller
{
    public function index()
    {
        // raw query
        $data = DB::select("select clients.name, count(users.id) as total from clients left join users on clients.id = users.client_id group by clients.name order by clients.name");

        // right way
        $shiningData = Client::withCount('users')->orderBy('name')->get();

        return view('question-3', compact('data', 'shiningData'));
    }
}
