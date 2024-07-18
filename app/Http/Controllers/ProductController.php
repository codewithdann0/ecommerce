<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('products.show', compact('product'));
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
}
