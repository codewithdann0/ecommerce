@extends('layouts.app')

@section('title', 'Update Profile Information')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Update Profile Information</h2>
        <form action="{{ route('profile.update-action') }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="mt-1 block w-full" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update Profile</button>
        </form>
    </div>
@endsection
