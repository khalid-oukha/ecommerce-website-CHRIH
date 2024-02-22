<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreFiltersController extends Controller
{
    public function filterByCategorie(Request $request)
    {
        $categorieId = $request->input('categorie');
        
        $products = Product::where('categorie_id', $categorieId)->get();
        return response()->json(['products' => $products]);

    }
    
}
