@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Need help or want to share feedback? Contact the SyncWithLove team for support, suggestions, or partnerships.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-rose-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Contact Us
        </h1>
        <p class="text-gray-600 text-lg">
            We’d love to hear from you. Reach out anytime.
        </p>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12">

        <form class="space-y-6">

            <div>
                <label class="block text-gray-700 font-medium mb-1">Your Name</label>
                <input type="text" class="w-full rounded-xl border-gray-300 focus:ring-pink-400 focus:border-pink-400" placeholder="John Doe">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Email Address</label>
                <input type="email" class="w-full rounded-xl border-gray-300 focus:ring-pink-400 focus:border-pink-400" placeholder="you@example.com">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Message</label>
                <textarea rows="5" class="w-full rounded-xl border-gray-300 focus:ring-pink-400 focus:border-pink-400" placeholder="Tell us how we can help..."></textarea>
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-pink-600 hover:bg-pink-700 text-white font-semibold transition">
                Send Message
            </button>
        </form>

        <div class="mt-10 text-center text-gray-600">
            Or email us directly at:<br>
            <span class="font-medium text-gray-900">support@syncwithlove.com</span>
        </div>

    </div>

</div>
@endsection
