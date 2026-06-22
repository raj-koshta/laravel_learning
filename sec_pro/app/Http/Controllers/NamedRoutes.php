<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedRoutes extends Controller
{
    public function show(){
        // return view('named-routes');
        // return redirect()->to('home/profile/user');
        return to_route('nr');
    }

    public function user(){
        return to_route('user', ['name' => 'Raj']);
    }
}
