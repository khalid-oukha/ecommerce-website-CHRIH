<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(10);
        // dd($products);
        return view("products",compact("products"));
    }
}
