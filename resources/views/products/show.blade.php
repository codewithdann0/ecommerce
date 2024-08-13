@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>

    <!-- Display Product Image -->
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mb-4 w-full h-64 object-cover">
    @else
        <img src="https://via.placeholder.com/150" alt="No Image" class="mb-4 w-full h-64 object-cover">
    @endif

    <!-- Like and Add to Cart Buttons -->
    <div class="flex justify-between items-center mb-4">
        <form action="{{ route('products.like', $product) }}" method="POST">
            @csrf
            <button type="submit" style="background-color: blue" class="px-4 py-2 text-white rounded">Like</button>
        </form>

        <form action="{{ route('cart.add', $product) }}" method="POST">
            @csrf
            <button type="submit" style="background-color: green" class="px-4 py-2 text-white rounded">Add to Cart</button>
        </form>
    </div>

    <a href="{{ route('products.index') }}" class="text-blue-500">Back to Products</a>
@endsection
