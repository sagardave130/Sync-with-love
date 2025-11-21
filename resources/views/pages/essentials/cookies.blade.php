@extends('layouts.app')

@section('title', 'Cookie Policy')
@section('meta_description', 'SyncWithLove uses minimal cookie-like technology only for essential site functions. Learn more about our cookie and tracking policy.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-purple-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Cookie Policy
        </h1>
        <p class="text-gray-600 text-lg">
            We keep things simple — minimal cookies, maximum privacy.
        </p>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12 space-y-8">

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">1. What Are Cookies?</h2>
            <p class="text-gray-600 leading-relaxed">
                Cookies are small text files stored on your device. They help websites remember preferences
                and improve your experience.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">2. Cookies We Use</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove does not use tracking cookies, advertising cookies, or third-party analytics cookies.
                The only technology we use is:
            </p>
            <ul class="list-disc pl-6 text-gray-600 space-y-1 mt-3">
                <li><strong>LocalStorage</strong> — to remember simple preferences (ex: name, last category selected).</li>
                <li><strong>Session data</strong> — temporary sync room data for gameplay.</li>
            </ul>
            <p class="mt-3 text-gray-600">None of this leaves your device.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">3. Third-Party Cookies</h2>
            <p class="text-gray-600 leading-relaxed">
                If we add analytics or ads in the future (e.g., Google AdSense), additional cookie usage will be disclosed here.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">4. How to Control Cookies</h2>
            <p class="text-gray-600 leading-relaxed">
                You can clear your browser’s storage anytime through settings. SyncWithLove works normally even if you disable cookies.
            </p>
        </section>

        <p class="text-gray-500 text-sm mt-8">Last updated: {{ date('F d, Y') }}</p>
    </div>

</div>
@endsection
