@extends('layouts.app')

@section('title', 'Update Password')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Change Password</h2>
        <form action="{{ route('profile.update-password') }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full" required>
            </div>
            <button type="submit" style="background-color: blue">Update Password</button>
        </form>
    </div>
@endsection
