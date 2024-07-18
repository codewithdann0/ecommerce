@extends('layouts.app')

@section('title', 'Profile Management')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Profile Management</h2>
        <a href="{{ route('profile.update') }}" class="text-blue-600 hover:underline">Update Profile Information</a>
        <a href="{{ route('profile.password') }}" class="ml-4 text-blue-600 hover:underline">Update Password</a>
        <a href="{{ route('profile.delete') }}" class="ml-4 text-red-600 hover:underline">Delete Account</a>
    </div>
@endsection
