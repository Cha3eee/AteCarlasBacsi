<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'orderID',
        'order_quantity',
        'product_name',
        'product_price',
        'productID',
    ];

    // Define the relationship with OrderInfo
    public function order()
    {
        return $this->belongsTo(OrderInfo::class, 'orderID', 'orderID');
    }
    use HasFactory;
}
