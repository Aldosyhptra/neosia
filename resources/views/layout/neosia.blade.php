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
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

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
    @include('components.footer')
</body>
</html>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 1000, // durasi animasi 1000ms
            once: true      // animasi hanya jalan sekali
        });
    });
</script>