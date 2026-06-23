<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        echo "Students List";
    }
    public function add(){
        echo "Add new student";
    }
}
