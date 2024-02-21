<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input("search");
        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        // $view = view('products', compact('products',))->render();;
        // $pagination = $products->links()->render();


        return response()->json([
            'products' => $products,
        ]);
    }
}
