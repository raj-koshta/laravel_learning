<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $users = DB::select('select * from users');
        return view('user', ['users' => $users]);
    }

    //  Http Client - 30
    public function getApiUsers()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('user', ['data' => json_decode($response)]);
    }


    public function queries()
    {
        // Getting all data
        // $result = DB::table('users')->get();

        //Getting speciifc data
        // $result = DB::table('users')->where('name','Raj')->get();

        //Getting First data
        // $result = DB::table('users')->first();
        // $result = [$result];

        // Get single column value
        // $result = DB::table('users')->where('name','Raj')->value('email');
        // $result = [$result];
        // print_r($result);

        // Insert data
        // $result = DB::table('users')->insert([
        //     'name' => 'Priya',
        //     'email' => 'priya@gm.co',
        //     'phone' => '9696521033',
        //     'password' => '564312'
        // ]);
        // if($result){
        //     return "Data inserted";
        // } else {
        //     return "Data not inserted";
        // }

        // update data
        // $result = DB::table('users')->where('id','1')->update(['phone' => '9876543210']);
        // if($result){
        //     return "Data Updated";
        // } else {
        //     return "Data not update";
        // }

        // Delete data
        // $result = DB::table('users')->where('id','3')->delete();
        // if($result){
        //     return "Data Deleted";
        // } else {
        //     return "Data not delete";
        // }



        // return view('user',['users' => $result]);
    }

    public function eloquentQuery()
    {
        // Get All data
        // $result = User::all();
        // $result = User::get();

        // Get specific data
        // $result = User::where('name','Raj')->get();

        // Get First data
        // $result = User::where('name','Raj')->first();
        // $result = [$result];

        // Find data by Id
        // $result = User::find(2);
        // $result = [$result];

        // Insert Data
        // $result = User::insert([
        //     'name' => 'Roomi',
        //     'phone' => '98654',
        //     'email' => 'roomi@gm.co',
        //     'password' => '54321',
        // ]);
        // if ($result)
        //     return "Data Inserted";
        // else
        //     return "Data Not Inserted";

        // Update Data
        // $result = User::where('name','Roomi')->update(['phone' => '96302588']);
        // if ($result)
        //     return "Data Updated";
        // else
        //     return "Data Not Updated";

        // Update Data
        $result = User::where('name','Roomi')->delete();
        if ($result)
            return "Data Deleted";
        else
            return "Data Not Deleted";

        return view('user', ['users' => $result]);
    }
}
