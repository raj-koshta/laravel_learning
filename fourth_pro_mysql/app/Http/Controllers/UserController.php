<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function users(){
        $users = DB::select('select * from users');
        return view('user', ['users' => $users]);
    }

    public function getApiUsers(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('user', ['data' => json_decode($response)]);
    }
}
