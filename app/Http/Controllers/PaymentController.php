<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        return view('checkout');
    }



    public function checkout(Request $request)
    {
        $totalprice = $request->get('price');
        $user = Auth::user();
        $cart = $user->cart;
        $cart->total_price = $totalprice;
        $cart->save();

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    
                    'name' => "total :",
                ],
                'unit_amount' => $totalprice * 100,
            ],
            'quantity' => 1,
        ];
        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',

            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            // 'cancel_url' => route('checkout.cancel', [], true),
        ]);


        return redirect($session->url);
    }



    public function success()
    {

        $user = Auth::user();
        $cart = $user->cart;

        $order = Order::create([
            "total_price"=> $cart->total_price,
            "cart_it"=> $cart->id,
            "user_id"=> $user->id,
        ]);

    
        $cart->products()->detach();
        return view('checkout');
    }
}