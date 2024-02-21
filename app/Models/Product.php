<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';

    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class);
    // }
    public function cart()
    {
        return $this->belongsToMany(Cart::class,'product_cart');
    }
}
