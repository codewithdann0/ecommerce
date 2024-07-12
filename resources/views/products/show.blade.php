@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="bg-white p-4 rounded shadow">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover mb-4">
        <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
        <p class="text-gray-600 mb-2">{{ $product->description }}</p>
        <p class="text-blue-600 font-bold text-xl mb-4">${{ $product->price }}</p>
        <button class="bg-blue-600 text-white py-2 px-4 rounded">Add to Cart</button>
    </div>
@endsection
