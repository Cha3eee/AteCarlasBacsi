<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $fillable = [
        'orderID',
        'userID',
        'user_FirstName',
        'user_LastName',
        'user_Address',
        'user_Email',
        'user_PhoneNum',
        'order_Status',
        'order_TotalAmount',
        'order_DeliveryInstructions',
        'order_DeliveryDate',
        'order_DeliveryTime',
        'order_PaymentMode',
    ];

    // Define the relationship with OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'orderID', 'orderID');
    }
    use HasFactory;
}
