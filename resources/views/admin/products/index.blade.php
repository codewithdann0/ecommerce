@extends('layouts.app')

@section('title', 'Admin Products')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Manage Products</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add New Product</a>

    <div class="mt-4">
        @foreach ($products as $product)
            <div class="border rounded p-4 mb-2 bg-white shadow">
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-700">{{ $product->description }}</p>
                <p class="text-blue-600 font-bold">${{ $product->price }}</p>
                <div class="flex justify-between mt-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
