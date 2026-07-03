<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    function getNameAttribute($value){
        return ucfirst($value);
    }

    function getEmailAttribute($val){
        return ucfirst($val);
    }
}
