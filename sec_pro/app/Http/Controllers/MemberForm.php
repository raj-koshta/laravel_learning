<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberForm extends Controller
{
    function addMember(Request $request){
        $request->validate([
            'skill' => 'required',
            'gender' => 'required',
            'city' => 'required | uppercase',
            'age' => 'required',
            'name' => 'required | min:4 | max:10',
            'email' => 'required',
        ], [
            'name.required' => 'Name can not be empty',
            'name.min' => 'User name must have minimum 3 character',
            'name.max' => 'User name allowed maximum 10 character',
            'city.uppercase' => 'The :attribute value must be in uppercase',
        ]);
        return $request;
        // echo $request->city;
        // echo "<br />";
        // echo $request->age;
        // echo "<br />";
        // echo $request->gender;
        // echo "<br />";
        // print_r($request->skill);
    }
}
