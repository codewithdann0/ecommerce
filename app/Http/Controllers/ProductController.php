<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query
        $search = $request->input('search');

        // Query products with optional search
        $products = Product::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        })->get();

        return view('products.index', compact('products', 'search'));
    }

    public function show(Product $product)
    {
        // Check if the user has liked this product
        $liked = Auth::check() ? $product->likes()->where('user_id', Auth::id())->exists() : false;

        return view('products.show', compact('product', 'liked'));
    }

    public function adminIndex()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $product = new Product($request->only(['name', 'description', 'price']));
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products');
        }
        $product->save();

        return redirect()->route('admin.products.index')->with('status', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $product->fill($request->only(['name', 'description', 'price']));
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products');
        }
        $product->save();

        return redirect()->route('admin.products.index')->with('status', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('status', 'Product deleted successfully.');
    }

    // Like a product
    public function like(Product $product)
    {
        $like = Like::firstOrNew([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ]);

        if ($like->exists) {
            $like->delete();
            return back()->with('status', 'Product unliked successfully.');
        } else {
            $like->save();
            return back()->with('status', 'Product liked successfully.');
        }
    }

    // Add product to cart
    public function addToCart(Product $product)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ]);

        return redirect()->route('cart.index')->with('status', 'Product added to cart successfully.');
    }
}
