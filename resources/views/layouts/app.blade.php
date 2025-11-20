{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CoupleSync') }} - @yield('title', 'Spark deeper intimacy & play')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
</head>

<body class="font-sans antialiased">
    <div id="root">
        <div class="min-h-screen bg-[#FAFAFA] selection:bg-rose-200 selection:text-rose-900">

            @include('components.navbar')

            <main>
                @yield('content')
            </main>

            @include('components.footer')
        </div>
    </div>

    @stack('scripts')
</body>

</html>
