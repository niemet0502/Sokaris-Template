<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description'
    ];

     /**
     * Get the products that owns the menu.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
