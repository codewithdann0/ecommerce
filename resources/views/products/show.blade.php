@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-auto">
    <a href="{{ route('products.index') }}" class="text-blue-500">Back to Products</a>
    <button style="background-color: blue" type="submit">Add to cart</button>
@endsection
