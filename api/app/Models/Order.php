<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'amount',
        'delevery_adresse',
        'total_amount',
        'delivery_price',
        'user_id',
        'customer_id',
        'delevery_id'
    ];
}
