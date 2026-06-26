<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents(){
        $funData = new \App\Models\Student;
        $funData->testFun();
        $students = \App\Models\Student::all();
        return view('students', ['students' => $students]);
    }
}
