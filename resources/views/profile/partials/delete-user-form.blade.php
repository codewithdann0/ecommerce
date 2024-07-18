@extends('layouts.app')

@section('title', 'Delete Account')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Delete Account</h2>
        <form action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <p class="mb-4 text-red-600">Are you sure you want to delete your account? This action cannot be undone.</p>
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded">Delete Account</button>
        </form>
    </div>
@endsection
