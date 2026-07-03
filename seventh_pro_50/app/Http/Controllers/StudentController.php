<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list(){
        return Student::all();
    }

    public function save(){
        $student = new Student();
        $student->name = "Jonah";
        $student->email = "Jonah@gm.co";
        $student->batch = "2026";

        if($student->save()){
            return "New Student saved";
        } else {
            return "unable to save";
        }
    }
}
