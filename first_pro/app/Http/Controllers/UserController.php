<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function user($name = null){
        return view('user', ['name' => $name]);
    }
    function user_data($name = null, $age = null){
        return view('user.age', ['name' => $name, 'age' => $age]);
    }
}
