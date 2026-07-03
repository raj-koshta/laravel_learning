<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    public function list(){
        $seller = Seller::find(1)->productData;
        return $seller;
    }
    public function manyRel(){
        $seller = Seller::find(1)->productMany;
        return $seller;
    }

    public function manyToOne(){
        // $product = Product::all();
        $product = Product::with('seller')->get();
        return $product;
    }
}
