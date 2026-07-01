<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function uploadImage(Request $request){
        $path = $request->file('file')->store('uploads','public');
        $pathArray = explode('/',$path);
        $imagePath = $pathArray[1];
        $img = new Image();
        $img->path = $imagePath;
        if($img->save())
        return redirect('/display-image');
        else
        return "Failed Image Load";
    }

    public function imageList(){
        return view('display-image',['images' => Image::get()]); 
    }
}
