{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')">

    <meta name="keywords" content="@yield('meta_keywords')">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('og_title', config('app.name') . ' - Spark deeper intimacy & play')" />
    <meta property="og:description" content="@yield('og_description', 'Fun, romantic & spicy couple quizzes. Play together live or send your partner playful questions they can answer anytime.')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('images/og-cover.jpg'))" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name') . ' - Spark deeper intimacy & play')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Romantic & spicy couple games. Sync instantly or send quizzes to your partner. No login needed.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-cover.jpg'))">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <!-- JSON-LD Schema -->
    @yield('schema')
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
