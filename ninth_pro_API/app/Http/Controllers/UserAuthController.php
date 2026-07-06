<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function login(Request $request){
        return "login funtion";
    }
    public function signup(Request $request){
        $inputs =  $request->all();
        $inputs['password'] = bcrypt($inputs['password']);
        $user = User::create($inputs);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return ['success' => true, 'data' => $success, 'msg' => 'User register successfully'];
        
    }
}
