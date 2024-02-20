<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // $products = Product::whereHas("Order", function($q) {
        //     $q->where("",1);
        // }->get();
        return view("shopingCart");
    }

    public function addToCART(Request $request)
    {
        // $user = Auth::user();

        $product = Product::findOrfail($request->id);

        // $cart = $user->cart;

        // if (!$cart) {
            $userid = 2;
           $cart = Cart::create(['user_id' => $userid]);
        // }
        // dd($cart);

            // Attach the product to the cart with additional data, such as quantity
            $cart->products()->sync($request->id);
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
}
