@extends('layouts.app')

@section('title', 'About SyncWithLove')
@section('meta_description', 'Learn about SyncWithLove — the romantic connection platform built to help couples spark intimacy, play, and explore fun questions without logins.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-pink-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-3xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            About SyncWithLove
        </h1>
        <p class="text-gray-600 text-lg">
            A playful space for couples to connect deeply — made with simplicity, privacy, and love.
        </p>
    </div>

    {{-- BODY --}}
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12 space-y-12">

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">✨ Our Mission</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove was created with a simple purpose:
                to help couples spark deeper intimacy through playful and meaningful interactions.
                No complications. No accounts. No pressure.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">💛 Why We Built It</h2>
            <p class="text-gray-600 leading-relaxed">
                Relationships today are fast, digital, long-distance, busy, and sometimes stressful.
                We wanted to create a small corner of the internet where two people can
                laugh, flirt, reflect, and rediscover each other.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">🔐 Privacy First</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove requires no login or identity.
                Your answers are private, anonymous,
                and temporary — nothing is permanently stored.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">🤍 Built for All Couples</h2>
            <p class="text-gray-600 leading-relaxed">
                Whether you’re dating, engaged, married, or long-distance —
                SyncWithLove adapts to your vibe. Romantic, spicy, deep, or playful:
                we’ve got it all.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">🌍 Our Vision</h2>
            <p class="text-gray-600 leading-relaxed">
                We imagine a world where love is intentional,
                curiosity is encouraged, and communication becomes joyful.
            </p>
        </section>

    </div>

</div>
@endsection
