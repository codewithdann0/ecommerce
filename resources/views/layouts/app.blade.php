<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Commerce</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-white shadow">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-600">E-Commerce</a>
            <div>
                <a href="/" class="text-blue-600 hover:underline">Home</a>
                <a href="/products" class="ml-4 text-blue-600 hover:underline">Products</a>
                <a href="/cart" class="ml-4 text-blue-600 hover:underline">Cart</a>
                @auth
                    <a href="/profile" class="ml-4 text-blue-600 hover:underline">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 text-blue-600 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="/login" class="ml-4 text-blue-600 hover:underline">Login</a>
                    <a href="/register" class="ml-4 text-blue-600 hover:underline">Register</a>
                @endauth
            </div>
        </nav>
    </header>
    <main class="container mx-auto p-4">
        @yield('content')
    </main>
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto p-4 text-center text-gray-600">
            &copy; {{ date('Y') }} E-Commerce. All rights reserved.
        </div>
    </footer>
</body>
</html>
