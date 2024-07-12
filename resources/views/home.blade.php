@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Welcome to Our E-Commerce Store!</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Example Product Cards -->
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-cover mb-2">
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-blue-600 font-bold">${{ $product->price }}</p>
                <a href="/products/{{ $product->id }}" class="text-blue-600 hover:underline">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
