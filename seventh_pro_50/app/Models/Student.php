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

    function setNameAttribute($value){
        $this->attributes['name'] = ucfirst("banana");
    }

    function setEmailAttribute($value){
        $this->attributes['email'] = strtolower("JONAH@GMAIL.co");
    }
}
