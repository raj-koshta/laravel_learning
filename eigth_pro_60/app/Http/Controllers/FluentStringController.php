<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentStringController extends Controller
{
    public function string(){

        // Old way which is not recommended
        // $info = "Hi, Let's Learn Laravel";
        // $info = Str::ucfirst($info);
        // $info = Str::replaceFirst("Hi", "Hello",$info);
        // $info = Str::camel($info);
        // echo $info;

        // New way using Fluent String
        $info = "Hi, Let's Learn Laravel";
        $info = Str::of($info)->ucfirst($info)->replaceFirst("Hi", "Hello",$info)->camel($info);
        echo $info;
    }
}
