<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    //I create a method who returns product by id
    public function show($cat,$product_id){
        $item = Product::where('id',$product_id)->first();

        return view('product.show',['item' => $item]);
        dd($item);
    }
        // I create showCategory method for displaycategories of products
        public function showCategory(){

            
        }
    
}
