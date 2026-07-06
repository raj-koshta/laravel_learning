<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function list(){
        return Student::all();
    }
    public function addStudent(Request $request){
        $rules = array(
            'name' => 'required | min:2 | max:15',
            'email' => 'required | email',
            'batch' => 'required'
        );

        $validation = Validator::make($request->all(), $rules);

        if($validation->fails()){
            return $validation->errors();
        }

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;

        if($student->save()){
            return ['message' => "Student data saved"];
        } else {
            return ['message' => "Unable to save data"];
        }
    }

    public function updateStudent(Request $request){
        // return "Update student";
        $student = Student::find($request->id);
      
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        
        if($student->save()){
            return ['message' => "Student Updated"];
        } else {
            return ['message' => "Unable to Update student"];
        }
    }


    public function deleteStudent($id){
        $student = Student::destroy($id);
        if($student){
            return ['message' => "Student Deleted"];
        } else {
            return ['message' => "Unable to Delete student"];
        }
    }
}
