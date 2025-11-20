@extends('layouts.app')

@section('title', 'FAQ – SyncWithLove')
@section('meta_description', 'Frequently asked questions about SyncWithLove. Learn how sync mode, send quiz mode, privacy, and gameplay work.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-rose-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Frequently Asked Questions
        </h1>
        <p class="text-gray-600 text-lg">Answers to your most common questions</p>
    </div>

    {{-- FAQ CONTENT --}}
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12 space-y-8">

        <!-- FAQ Item -->
        @foreach([
            ['What is SyncWithLove?', 'A fun and romantic quiz platform for couples to explore cute, spicy, deep, and playful questions — together or separately.'],
            ['Do I need an account?', 'No. SyncWithLove is fully anonymous and requires no login. Your privacy comes first.'],
            ['How does Sync Play work?', 'Both partners join the same room using a 6-digit code and answer questions live, in sync.'],
            ['What is Send Quiz mode?', 'You generate a link, send it to your partner, and they answer whenever they want. Later, you can see their responses. Perfect for long-distance couples.'],
            ['Is my data stored?', 'No personal data is ever stored. Answers are only kept temporarily to show your results.'],
            ['Is it free?', 'Yes! Core features are completely free.'],
            ['Can I play spicy or 18+ quizzes?', 'Yes — if both partners confirm. There is a safety and consent step before spicy categories.'],
        ] as $faq)
        <div class="border-b pb-5">
            <h3 class="text-xl font-semibold text-gray-800">{{ $faq[0] }}</h3>
            <p class="mt-2 text-gray-600 leading-relaxed">{{ $faq[1] }}</p>
        </div>
        @endforeach

    </div>

</div>
@endsection
