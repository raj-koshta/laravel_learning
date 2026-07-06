<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(Request $request){
        $inputs =  $request->all();
        $user = User::where('email', $inputs['email'])->first();
        if(!$user || !Hash::check($inputs['password'],$user->password)){
            return ['result' => "User Not found", 'status' => false];
        }
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return ['result' => $success, 'status' => true];
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
