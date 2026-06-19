<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberForm extends Controller
{
    function addMember(Request $request){
        // return $request;
        echo $request->city;
        echo "<br />";
        echo $request->age;
        echo "<br />";
        echo $request->gender;
        echo "<br />";
        print_r($request->skill);
    }
}
