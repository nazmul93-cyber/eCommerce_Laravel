<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//custom
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {

        // return "Welcome to product page"; 

        $product = Product::all();

        return view('product',['passKey'=>$product]);
    }
}
