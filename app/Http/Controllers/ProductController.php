<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //I create a method who returns product by id
    public function show($category,$product_id){
        $item = Product::where('id',$product_id)->first();

        return view('product.show',[
            'item' => $item
        ]);
    }
}
