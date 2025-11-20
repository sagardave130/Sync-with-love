<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CoupleSync') }} - @yield('title', 'Spark deeper intimacy & play')</title>

    <meta name="description" content="@yield('meta_description', 'Play romantic, spicy, fun, and emotional couple quizzes. Sync in real-time or send playful questions to your partner anytime. No login required — deepen your connection effortlessly.')">

    <meta name="keywords" content="@yield('meta_keywords', 'couple quiz, romantic questions, spicy game for couples, relationship quiz, long distance couple games, sync couple gameplay, love questions, AI couple quiz')">

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
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- JSON-LD Schema -->
    @yield('schema')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div id="root">
        <div class="min-h-screen bg-[#FAFAFA] selection:bg-rose-200 selection:text-rose-900 font-sans">
            <nav class="absolute top-0 left-0 right-0 z-50">
                <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
                    <div class="flex items-center gap-2 font-bold text-2xl serif text-gray-900">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl flex items-center justify-center text-white text-lg shadow-lg shadow-rose-200">
                            ♥</div>
                        <span>CoupleSync</span>
                    </div>
                    <button
                        class="
        py-3 px-6 rounded-2xl font-semibold transition-all duration-200 active:scale-95 flex items-center justify-center gap-2 shadow-sm
        bg-transparent border-2 border-rose-500 text-rose-600 hover:bg-rose-50


        py-2.5 px-6 text-sm rounded-full border-gray-200 hover:border-rose-300 hover:text-rose-600 bg-white/80 backdrop-blur-sm font-semibold transition-all
      ">Enter
                        Code</button>
                </div>
            </nav>
            <div class="pb-20">
                <div class="relative pt-8 pb-12 md:pt-32 md:pb-32 overflow-hidden">
                    <div class="absolute inset-0 bg-white z-0">
                        <div
                            class="absolute top-[-20%] right-[-10%] w-[800px] h-[800px] bg-rose-200/40 rounded-full blur-[120px] animate-pulse-slow">
                        </div>
                        <div
                            class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-indigo-200/40 rounded-full blur-[100px] animate-pulse-slow delay-700">
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                        <div class="text-center lg:text-left order-2 lg:order-1">
                            <div
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-rose-100 shadow-sm mb-8 animate-fade-in-up hover:shadow-md transition-shadow cursor-default">
                                <span class="flex h-2 w-2 relative">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                                </span>
                                <span class="text-xs font-bold text-gray-600 tracking-wide uppercase">Live Web App • No
                                    Login Required</span>
                            </div>
                            <h1
                                class="text-5xl md:text-7xl font-black text-gray-900 serif tracking-tight leading-[1.1] mb-6 animate-fade-in-up delay-100">
                                Spark deeper <br>
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 via-purple-600 to-indigo-600">intimacy
                                    &amp; play.</span>
                            </h1>
                            <p
                                class="text-xl text-gray-500 leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0 animate-fade-in-up delay-200">
                                The interactive web game for couples to redisover each other. Select a vibe, send the
                                link to your partner, and watch your answers sync.</p>
                            <div
                                class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up delay-300">
                                <button
                                    class="
        py-3 px-6 rounded-2xl font-semibold transition-all duration-200 active:scale-95 flex items-center justify-center gap-2 shadow-sm
        bg-rose-500 text-white hover:bg-rose-600 shadow-rose-200


        px-10 py-5 text-lg rounded-2xl shadow-xl shadow-rose-500/20 hover:shadow-rose-500/40 transform hover:-translate-y-1 font-bold bg-gradient-to-r from-rose-600 to-rose-500 text-white transition-all
      ">Start
                                    New Game</button>
                                <button
                                    class="
        py-3 px-6 rounded-2xl font-semibold transition-all duration-200 active:scale-95 flex items-center justify-center gap-2 shadow-sm
        bg-white text-gray-800 border border-gray-200 hover:bg-gray-50


        px-10 py-5 text-lg rounded-2xl bg-white border-2 border-gray-100 hover:border-rose-200 text-gray-600 font-bold hover:bg-gray-50
      ">Enter
                                    Code</button>
                            </div>
                            <div
                                class="mt-10 flex items-center justify-center lg:justify-start gap-8 text-sm font-medium text-gray-400 animate-fade-in-up delay-500">
                                <div class="flex items-center gap-2">
                                    <span class="text-green-500 text-lg">✓</span> Free forever
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-green-500 text-lg">✓</span> Private
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-green-500 text-lg">✓</span> Instant
                                </div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 flex justify-center relative animate-fade-in-up delay-200">
                            <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-gradient-to-tr from-rose-200/50 to-purple-200/50 rounded-full blur-[60px] -z-10">
                            </div>
                            <div class="relative w-full max-w-sm mx-auto perspective-1000 py-10 lg:py-0">
                                <div
                                    class="absolute top-0 -right-10 w-40 h-40 bg-rose-200 rounded-full blur-3xl opacity-40 animate-pulse-slow">
                                </div>
                                <div
                                    class="absolute bottom-0 -left-10 w-40 h-40 bg-indigo-200 rounded-full blur-3xl opacity-40 animate-pulse-slow delay-700">
                                </div>
                                <div
                                    class="bg-white/90 backdrop-blur-xl border border-white/60 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] rounded-3xl p-8 relative z-10 animate-float transform rotate-[-2deg]">
                                    <div class="flex items-center gap-2 mb-6">
                                        <span
                                            class="bg-rose-100 text-rose-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border border-rose-200">Romantic</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-900 leading-snug mb-6 serif">"What is one
                                        memory of us that you will cherish forever?"</h3>
                                    <div class="flex items-center gap-3 opacity-50">
                                        <div class="h-2 w-2 rounded-full bg-gray-400"></div>
                                        <div class="h-1 w-24 bg-gray-200 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="absolute -bottom-8 -right-6 z-20 animate-fade-in-up delay-300">
                                    <div
                                        class="bg-gradient-to-br from-rose-500 to-pink-600 text-white p-4 rounded-2xl rounded-tr-sm shadow-xl shadow-rose-200/50 max-w-[220px] text-sm font-medium transform rotate-[2deg] border border-white/20">
                                        That sunset dinner in Maui... 🌅</div>
                                </div>
                                <div class="absolute -bottom-20 left-0 z-20 animate-fade-in-up delay-700">
                                    <div
                                        class="bg-white/80 backdrop-blur-md border border-white text-gray-800 p-3 rounded-2xl rounded-tl-sm shadow-lg flex items-center gap-3 text-xs font-bold transform rotate-[-1deg]">
                                        <div class="relative flex h-3 w-3">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                        </div>Partner is typing...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 bg-white relative overflow-hidden">
                    <div class="max-w-6xl mx-auto px-6 relative z-10">
                        <div class="text-center mb-16">
                            <h2 class="text-3xl font-bold serif text-gray-900 mb-3">How it works</h2>
                            <p class="text-gray-500">Three steps to a better relationship tonight.</p>
                        </div>
                        <div class="grid md:grid-cols-3 gap-10 relative">
                            <div class="hidden md:block absolute top-12 left-[20%] right-[20%] h-0.5 bg-gray-100 -z-10">
                                <div
                                    class="absolute top-0 left-0 h-full w-1/2 bg-gradient-to-r from-rose-200 to-purple-200">
                                </div>
                            </div>
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="w-24 h-24 bg-white rounded-3xl shadow-xl shadow-rose-100 border border-rose-50 flex items-center justify-center text-4xl mb-6 group-hover:-translate-y-2 transition-transform duration-300 relative">
                                    🔗
                                    <div
                                        class="absolute -bottom-3 bg-rose-100 text-rose-600 text-xs font-bold px-3 py-1 rounded-full">
                                        Step 1</div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Create &amp; Share</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Generate a private room link. No
                                    downloads. No signup.</p>
                            </div>
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="w-24 h-24 bg-white rounded-3xl shadow-xl shadow-purple-100 border border-purple-50 flex items-center justify-center text-4xl mb-6 group-hover:-translate-y-2 transition-transform duration-300 relative delay-100">
                                    📱
                                    <div
                                        class="absolute -bottom-3 bg-purple-100 text-purple-600 text-xs font-bold px-3 py-1 rounded-full">
                                        Step 2</div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Play in Sync</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Answer questions on your own device.
                                    See who's typing in real-time.</p>
                            </div>
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="w-24 h-24 bg-white rounded-3xl shadow-xl shadow-indigo-100 border border-indigo-50 flex items-center justify-center text-4xl mb-6 group-hover:-translate-y-2 transition-transform duration-300 relative delay-200">
                                    ✨
                                    <div
                                        class="absolute -bottom-3 bg-indigo-100 text-indigo-600 text-xs font-bold px-3 py-1 rounded-full">
                                        Step 3</div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Reveal &amp; Connect</h3>
                                <p class="text-gray-500 text-sm leading-relaxed">Answers unlock together. Compare,
                                    laugh, and spark deep conversations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-6 bg-slate-50 relative">
                    <div class="absolute top-0 left-0 w-full h-20 bg-gradient-to-b from-white to-transparent"></div>
                    <div class="text-center mb-14">
                        <span
                            class="text-rose-600 font-bold tracking-widest text-xs uppercase bg-rose-100 px-3 py-1 rounded-full">The
                            Library</span>
                        <h2 class="text-4xl font-bold serif text-gray-900 mt-4 mb-4">Choose Your Vibe</h2>
                        <div class="inline-block bg-white border border-rose-100 rounded-full px-5 py-2 shadow-sm">
                            <p class="text-sm font-semibold text-rose-600 flex items-center gap-2">Pick a vibe <span
                                    class="text-gray-400">→</span> Choose Play Now or Send Quiz <span
                                    class="text-gray-400">→</span> Connect deeper ❤️ </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                        <div
                            class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group flex flex-col cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-rose-400 to-red-500"></div>
                            <div class="absolute inset-0 opacity-30"
                                style="background-image: radial-gradient(circle, rgba(255, 255, 255, 0.4) 2px, transparent 3px); background-size: 20px 20px;">
                            </div>
                            <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
                                <div>
                                    <div
                                        class="bg-white/20 backdrop-blur-md w-12 h-12 rounded-2xl flex items-center justify-center text-2xl shadow-inner mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="w-6 h-6">
                                            <path
                                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-2 font-serif leading-tight">Romantic</h3>
                                    <p class="text-white/90 text-sm leading-relaxed font-medium">Reconnect and explore
                                        your love language.</p>
                                </div>
                                <div class="flex gap-3 mt-6 pt-6 border-t border-white/10">
                                    <button
                                        class="flex-1 bg-white/20 hover:bg-white text-white hover:text-rose-600 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white/20 backdrop-blur-sm">Play
                                        Now</button>
                                    <button
                                        class="flex-1 bg-white hover:bg-white/90 text-gray-900 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white">Send
                                        Quiz</button>
                                </div>
                                <div class="absolute -bottom-4 -right-4 text-9xl opacity-10 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group flex flex-col cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-red-900"></div>
                            <div class="absolute inset-0 opacity-30"
                                style="background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0px, rgba(255, 255, 255, 0.1) 10px, transparent 10px, transparent 20px); background-size: 20px 20px;">
                            </div>
                            <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
                                <div>
                                    <div
                                        class="bg-white/20 backdrop-blur-md w-12 h-12 rounded-2xl flex items-center justify-center text-2xl shadow-inner mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177 7.547 7.547 0 01-1.705-1.715.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-2 font-serif leading-tight">Spicy</h3>
                                    <p class="text-white/90 text-sm leading-relaxed font-medium">Hot, 18+ questions to
                                        turn up the heat.</p>
                                </div>
                                <div class="flex gap-3 mt-6 pt-6 border-t border-white/10">
                                    <button
                                        class="flex-1 bg-white/20 hover:bg-white text-white hover:text-rose-600 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white/20 backdrop-blur-sm">Play
                                        Now</button>
                                    <button
                                        class="flex-1 bg-white hover:bg-white/90 text-gray-900 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white">Send
                                        Quiz</button>
                                </div>
                                <div class="absolute -bottom-4 -right-4 text-9xl opacity-10 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177 7.547 7.547 0 01-1.705-1.715.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group flex flex-col cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-500"></div>
                            <div class="absolute inset-0 opacity-30" style="background-size: 20px 20px;"></div>
                            <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
                                <div>
                                    <div
                                        class="bg-white/20 backdrop-blur-md w-12 h-12 rounded-2xl flex items-center justify-center text-2xl shadow-inner mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-2 font-serif leading-tight">Fun &amp; Playful</h3>
                                    <p class="text-white/90 text-sm leading-relaxed font-medium">Lighthearted playful
                                        truth or dare style.</p>
                                </div>
                                <div class="flex gap-3 mt-6 pt-6 border-t border-white/10">
                                    <button
                                        class="flex-1 bg-white/20 hover:bg-white text-white hover:text-rose-600 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white/20 backdrop-blur-sm">Play
                                        Now</button>
                                    <button
                                        class="flex-1 bg-white hover:bg-white/90 text-gray-900 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white">Send
                                        Quiz</button>
                                </div>
                                <div class="absolute -bottom-4 -right-4 text-9xl opacity-10 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group flex flex-col cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-600"></div>
                            <div class="absolute inset-0 opacity-30" style="background-size: 20px 20px;"></div>
                            <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
                                <div>
                                    <div
                                        class="bg-white/20 backdrop-blur-md w-12 h-12 rounded-2xl flex items-center justify-center text-2xl shadow-inner mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-2 font-serif leading-tight">Deep &amp; Emotional
                                    </h3>
                                    <p class="text-white/90 text-sm leading-relaxed font-medium">Serious questions
                                        about future and emotion.</p>
                                </div>
                                <div class="flex gap-3 mt-6 pt-6 border-t border-white/10">
                                    <button
                                        class="flex-1 bg-white/20 hover:bg-white text-white hover:text-rose-600 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white/20 backdrop-blur-sm">Play
                                        Now</button>
                                    <button
                                        class="flex-1 bg-white hover:bg-white/90 text-gray-900 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white">Send
                                        Quiz</button>
                                </div>
                                <div class="absolute -bottom-4 -right-4 text-9xl opacity-10 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group bg-gray-900 flex flex-col">
                            <div class="absolute inset-0 bg-gradient-to-bl from-purple-900 via-black to-indigo-900">
                            </div>
                            <div
                                class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20">
                            </div>
                            <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
                                <div class="mb-4">
                                    <div class="flex justify-between items-start mb-4">
                                        <div
                                            class="bg-gradient-to-r from-purple-500 to-indigo-500 w-12 h-12 rounded-2xl flex items-center justify-center text-xl shadow-lg shadow-purple-500/30">
                                            ✨</div>
                                        <span
                                            class="bg-white/10 text-[10px] font-bold px-2 py-1 rounded-md border border-white/20 uppercase tracking-wider">Unlimited</span>
                                    </div>
                                    <h3
                                        class="font-bold text-2xl mb-1 font-serif text-transparent bg-clip-text bg-gradient-to-r from-purple-200 to-indigo-200">
                                        AI Magic</h3>
                                    <p class="text-gray-300 text-sm mb-3 font-medium">Type any topic you love.</p>
                                    <div
                                        class="bg-white/10 rounded-lg p-2 text-[10px] text-gray-400 italic border border-white/10">
                                        "Star Wars", "90s Nostalgia", "Our Future House"...</div>
                                </div>
                                <div class="flex gap-3 mt-auto pt-4 border-t border-white/10">
                                    <button
                                        class="flex-1 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white py-3 px-4 rounded-xl text-sm font-bold shadow-lg shadow-purple-900/30 transition-all active:scale-95 border border-white/20">Play
                                        Now</button>
                                    <button disabled=""
                                        class="flex-1 bg-white/5 text-white/30 py-3 px-4 rounded-xl text-sm font-bold border border-transparent cursor-not-allowed">Send
                                        Quiz</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mt-20 border-t border-gray-200 py-12 bg-white text-center">
                    <p class="text-gray-400 text-sm mb-6">Built with ❤️ for love.</p>
                    <div class="flex justify-center gap-8 text-sm font-medium text-gray-500">
                        <a href="#" class="hover:text-rose-500 transition-colors">Privacy</a>
                        <a href="#" class="hover:text-rose-500 transition-colors">Terms</a>
                        <a href="#" class="hover:text-rose-500 transition-colors">Contact</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script type="module" src="/index.tsx"></script>
</body>

</html>
