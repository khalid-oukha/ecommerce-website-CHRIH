<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy("id","desc")->paginate(10);
        $categories = Category::all();
        return view("products",compact("products","categories"));
    }

    public function showProduct($id){
        $product = Product::find($id);
        return view("singlepage",compact("product"));
    }
}
