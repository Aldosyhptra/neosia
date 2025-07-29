<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Import font Noto Sans --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }
    </style>
</head>

<script src="//unpkg.com/alpinejs" defer></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar / Header -->
    @include('components.navbar')

    <!-- Content -->
    <main class="w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 py-4 text-center">
        <p class="text-sm">&copy; {{ date('Y') }} MyApp. All rights reserved.</p>
    </footer>
</body>
</html>
