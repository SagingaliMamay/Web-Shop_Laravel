<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * I create this HomeController for logic of home page
 */
class HomeController extends Controller
{   //this method is for view index file(entry point).
    public function index(){
        //I create $products for stocking all products
        $products = Product::orderBy('created_at')->take(8)->get();
         // here I want to display all products from table 'products'
       /* foreach($products as $product){
            echo'Title: '.$product->title;
            echo "<br>";
            echo'Price: '.$product->price;
            echo "<br>";
            echo"-------------------------";
            echo "<br>";
        }*/
        return view ('home.index',[
            'products' => $products
        ]);
       // dd($products);
    }
}
    

