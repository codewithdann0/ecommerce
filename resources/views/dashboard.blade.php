@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
    <p class="text-gray-600 mt-2">Welcome back, {{ Auth::user()->name }}!</p>
</div>
@endsection
