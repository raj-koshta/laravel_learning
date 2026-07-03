<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    // One to One Relationship
    public function productData(){
        return $this->hasOne('App\Models\Product','seller_id');
    }

    public function productMany(){
        return $this->hasMany('App\Models\Product','seller_id');
    }
}
