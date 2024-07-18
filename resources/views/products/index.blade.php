@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Products</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('products.index') }}" class="mb-4">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..." class="border p-2 rounded w-full md:w-1/2">
        <button type="submit" style="background-color: blue">Search</button>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-blue-600 font-bold">${{ $product->price }}</p>
                <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
