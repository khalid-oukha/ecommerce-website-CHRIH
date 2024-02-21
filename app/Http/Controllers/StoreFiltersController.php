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
        
        // Add logic to retrieve products based on the selected category ($categorieId)
        // For example, assuming your Product model has a 'category_id' column:
        $products = Product::where('categorie_id', $categorieId)->get();
        
        // You can return the products as JSON or however you prefer to structure the response
        return response()->json(['products' => $products]);
    }
    
}
