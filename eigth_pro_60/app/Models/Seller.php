<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    public function productData(){
        return $this->hasOne('App\Models\Product','seller_id');
    }
}
