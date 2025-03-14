{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md">
                {{ session('status') }}
            </div>
            {{ $slot }}
        </main>

        @include('layouts.footer')
        @if (isset($footer))
            <!-- #region -->
            <footer class="bg-white shadow">
                <div class="mb-0 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $footer }}
                </div>
            </footer>
        @endif
    </div>
</body>
