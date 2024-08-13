<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Like;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define relationship with likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Define relationship with cart items
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
