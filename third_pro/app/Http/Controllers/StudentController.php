<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        return "List of students";
    }
    public function add(){
        return "add a new student";
    }
    public function del(){
        return "Delete a students";
    }
    public function about($name){
        return $name;
    }
}
