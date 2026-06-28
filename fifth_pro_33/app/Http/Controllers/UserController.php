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

    public function requestAnalysis(Request $request){
        echo "Request Method :-". $request->method().'<br /><hr /> <hr />';
        echo "Request path :-". $request->path().'<br /><hr />';
        echo "Request URL :-". $request->url().'<br /><hr />';
        echo "Request Input Name with input funtion:-". $request->input('name').'<br /><hr />';
        echo "Request Input Name with direct name access :-". $request->name.'<br /><hr />';
        echo "Request All Input Access with input function :-".'<br /><hr />';
        print_r($request->input());
        echo "<br /><hr />";
        echo "Request All Input Access with Collect function :-".'<br /><hr />';
        print_r($request->collect());
        echo "<br /><hr />";
        echo "Check Request method  :-". $request->isMethod('post').'<br /><hr />';
        echo "Check Route Path  :-". $request->is('user').'<br /><hr />';
        echo "Check IP  :-". $request->ip().'<br /><hr />';
    }

    public function login(Request $request){
        // return $request;

        $request->session()->put('user', $request->name);
        return redirect('profile');
    }

    public function logout(){
        session()->pull('user');
        return redirect('login');
    }
}
