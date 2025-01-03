<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'image', 'category'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishlists()
    {
    return $this->hasMany(Wishlist::class);
    }
}
