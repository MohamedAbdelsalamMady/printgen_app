<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'street_name',
        'building_name_no',
        'user_id',
        'product_title',
        'product_id',
        'quantity',
        'size',
        'color',
        'payment_status',
        'name_on_card',
        'credit_card_number',
        'expiration_date',
        'cvv',
        'delivery_status',
        'price',
        'orderTotal',
        'image'
    ];
}
