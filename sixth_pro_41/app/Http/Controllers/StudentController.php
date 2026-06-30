<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;

        $res = $student->save();
        if($res){
            echo "Saved";
        } else {
            echo "Not saved";
        }
    }

    public function listStudent(){
        $students = Student::all();
        return view('list-student',['students' => $students]);
    }
 
    public function deleteStudent($id){
        $isDeleted = Student::destroy($id);
        return $isDeleted ? redirect('list-student') : 'Not Deleted';
    }
 
    public function editStudent($id){
        $student = Student::find($id);
        return view('edit-student', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;

        if($student->save()){
            return redirect('list-student');
        } else {
            return "Update fail";
        }

    }
}
