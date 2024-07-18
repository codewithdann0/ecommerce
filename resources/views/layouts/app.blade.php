<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Commerce</title>
    @vite('resources/css/app.css')
    <style>
        /* Add this style to handle the dropdown menu */
        .dropdown:hover .dropdown-menu {
            display: block;
            transition: 5s;
        }
    </style>
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-white shadow-md">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <a href="/" class="text-3xl font-bold text-blue-600">Ethio Buy</a>
            <div class="flex items-center space-x-6">
                <a href="/" class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">Home</a>
                <a href="/products" class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">Products</a>
                <a href="/cart" class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">Cart</a>
                @auth
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.products.index') }}" class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">Admin</a>
                    @endif
                    <div class="relative inline-block text-left dropdown">
                        <button class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">
                            Profile
                        </button>
                        <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden dropdown-menu">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit Profile</a>
                                <a href="{{ route('profile.update-password') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Update Password</a>
                                <form action="{{ route('profile.destroy') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" role="menuitem" class="w-full text-left">Delete Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 text-lg text-blue-600 hover:text-blue-800 transition duration-200">Logout</button>
                    </form>
                @else
                    <a href="/login" class="text-lg text-blue-600 hover:text-blue-800 transition duration-200">Login</a>
                    <a href="/register" class="ml-4 text-lg text-blue-600 hover:text-blue-800 transition duration-200">Register</a>
                @endauth
            </div>
        </nav>
    </header>
    <main class="container mx-auto p-6">
        @yield('content')
    </main>
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto p-4 text-center text-gray-600">
            &copy; {{ date('Y') }} E-Commerce. All rights reserved.
        </div>
    </footer>
</body>
</html>
