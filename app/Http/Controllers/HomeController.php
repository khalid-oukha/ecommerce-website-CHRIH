<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $latesteProducts = Product::latest("id")->take('3')->get();
        $latestCatgories = Category::latest("id")->take("4")->get();
        // $topProduct = Product::join("order_products","order_products.product_id","=","products.id")
        // ->groupby("products.id")
        // ->get(["products.*",DB::raw("count(products.id) as product_number")])
        // ->sortByDesc("product_number")
        // ->first();
        $topProduct = Product::join('orders', "orders.product_id", "=", "products.id")
            ->groupBy('products.id')
            ->get(["products.*", DB::raw("count(products.id) as product_number")])
            ->sortByDesc("product_number")
            ->first();

        // dd($topProduct);
        return view('home', compact('latesteProducts', 'latestCatgories', 'topProduct'));
    }
}
