<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request){
        return "Get Route MEthod";
    }
    public function post(Request $request){
        return "Post Route MEthod";
    }
    public function put(Request $request){
        return "Put Route MEthod";
    }
    public function patch(Request $request){
        return "Patch Route MEthod";
    }
    public function delete(Request $request){
        return "Delete Route MEthod";
    }
    public function any(Request $request){
        return "Any Method : " . $request->_method;
    }
    public function group1(Request $request){
        return "Match Method : Group 1 Method :- controller method : " . $request->_method;
    }
    public function group2(Request $request){
        return "Match Method : Group 2 Method :- controller method : " . $request->_method;
    }
}
