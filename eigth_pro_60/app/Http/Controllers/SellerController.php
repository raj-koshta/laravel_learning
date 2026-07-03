<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function list(){
        $seller = Seller::find(1)->productData;
        return $seller;
    }
}
