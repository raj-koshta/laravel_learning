<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list(){
        return Student::all();
    }
    public function addStudent(Request $request){
        return $request->input();
    }
}
