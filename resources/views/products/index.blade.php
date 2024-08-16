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

                <!-- Display Product Image -->
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mb-4 w-full h-48 object-cover">
                @else
                    <img src="https://via.placeholder.com/150" alt="No Image" class="mb-4 w-full h-48 object-cover">
                @endif

                <!-- Like and Add to Cart Buttons -->
                <div class="flex justify-between items-center">
                    <form action="{{ route('products.like', $product) }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: blue" class="px-4 py-2 text-white rounded">Like</button>
                    </form>

                    <form action="{{ route('cart.add', $product) }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: green" class="px-4 py-2 text-white rounded">Add to Cart</button>
                    </form>
                </div>

                <!-- Display Number of Likes -->
                <p class="text-gray-500 mt-2">Likes: {{ $product->likeCount() }}</p>

                <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline mt-2 block">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
