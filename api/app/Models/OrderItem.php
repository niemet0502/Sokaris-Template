<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'order_id',
        'product_id'
    ];

     /**
     * Get the order that owns the items.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
