<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Product $product)
    {
        $user = Auth::user();
        
        // Check if the user has already liked this product
        $existingLike = Like::where('user_id', $user->id)->where('product_id', $product->id)->first();
        
        if ($existingLike) {
            // If the user has already liked the product, remove the like
            $existingLike->delete();
            return redirect()->back()->with('status', 'Like removed.');
        } else {
            // Otherwise, create a new like
            Like::create([
                'user_id' => $user->id,
                'product_id' => $product->id
            ]);
            return redirect()->back()->with('status', 'Product liked.');
        }
    }
}
