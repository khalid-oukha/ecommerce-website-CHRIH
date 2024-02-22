<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = 'orders';
    protected $fillable = [
        'total_price','user_id','cart_id'
    ] ;
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
