<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
        // return $request;
        echo $request->name;
        echo "<br />";
        echo $request->email;
        echo "<br />";
        echo $request->city;
    }
}
