<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <!-- This section is intentionally left blank to remove the logo -->
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
