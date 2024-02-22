<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart";
    protected $fillable = [
        "user_id","total_price",
    ];


    public function calculateTotalPrice()
    {
        $products = $this->products;

        $totalPrice = 0;

        foreach ($products as $product) {
            $totalPrice += $product->pivot->price;
        }

        return $totalPrice;
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_cart');
    }
}
