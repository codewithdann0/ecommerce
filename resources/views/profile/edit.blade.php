@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <h1>Edit Profile</h1>
    
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <button type="submit" style="background-color: blue">Update Profile</button>
    </form>
@endsection
