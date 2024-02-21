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
        $user = Auth::user();
        $cart = $user->cart;

        // Check if the user has a cart
        if ($cart) {
            $cartProducts = $cart->products;
            return view('shopingCart', compact('cartProducts'));
        }

        // Handle the case where the user doesn't have a cart
        return view('shopingCart', ['cartProducts' => []]);
    }


    public function addToCART(Request $request)
    {
        $user = Auth::user();
        $product = Product::findOrFail($request->id);
        $cart = $user->cart;
        if ($cart === null) {
            $cart = Cart::create(['user_id' => $user->id]);
        } else {
        }

        $cart->products()->attach($product->id, [
            'price' => $product->price,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }


    public function removeProductCart(Request $request)
    {
        $productId = $request->id;
        $user = Auth::user();
        $cart = $user->cart;
    
        if ($cart) {
            $cart->products()->detach($productId);
    
            return response()->json(['success' => true, 'message' => 'Product removed from cart successfully']);
        }
    
        return response()->json(['success' => false, 'message' => 'User does not have a cart']);
    }
}
