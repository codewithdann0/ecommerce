@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Your Cart</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($cartItems as $item)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold">{{ $item->product->name }}</h2>
                <p class="text-gray-600">{{ $item->product->description }}</p>
                <p class="text-blue-600 font-bold">${{ $item->product->price }}</p>
                <p class="text-gray-800">Quantity: {{ $item->quantity }}</p>

                <!-- Remove Item Button -->
                <form action="{{ route('cart.remove', $item->product) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: red" class="px-4 py-2 text-white rounded">Remove</button>
                </form>
            </div>
        @endforeach
    </div>

    <!-- Total Price Calculation -->
    <div class="mt-4 text-right font-bold">
        Total: ${{ $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        }) }}
    </div>

    <a href="{{ route('products.index') }}" class="text-blue-500 mt-4 block">Continue Shopping</a>
@endsection
