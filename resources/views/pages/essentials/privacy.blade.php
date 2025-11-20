@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_description', 'Learn how SyncWithLove protects your privacy. No login required, no user accounts, and no personal data stored. Your answers remain private between you and your partner.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-pink-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Privacy Policy
        </h1>
        <p class="text-gray-600 text-lg">
            Your privacy and trust matter to us. We keep things simple, safe, and private — always.
        </p>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12 space-y-8">

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">1. Introduction</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove (“we”, “our”, or “us”) is committed to protecting your privacy.
                Our platform is designed to be used without logins, accounts, or personal data collection.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">2. No Account Required</h2>
            <p class="text-gray-600 leading-relaxed">
                You do not need an account to use SyncWithLove. We do not collect names, emails,
                phone numbers, or any personally identifiable information.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">3. Data We Do Not Store</h2>
            <p class="text-gray-600 leading-relaxed">
                We do not store:
            </p>
            <ul class="list-disc pl-6 text-gray-600 space-y-1 mt-3">
                <li>Personal identity information</li>
                <li>Quiz responses permanently</li>
                <li>Partner answers (beyond temporary session use)</li>
                <li>Tracking IDs or behavior profiles</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">4. Cookies & Local Storage</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove may use localStorage to remember simple preferences
                like language or previously selected categories.
                This data never leaves your device.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">5. Third-Party Services</h2>
            <p class="text-gray-600 leading-relaxed">
                We may use analytics or ads that track anonymous usage to improve our service,
                but we never share or sell your data to third parties.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">6. Contact</h2>
            <p class="text-gray-600 leading-relaxed">
                If you have questions about this Privacy Policy, please contact us at:
            </p>
            <p class="mt-2 font-medium text-gray-900">support@syncwithlove.com</p>
        </section>

        <p class="text-gray-500 text-sm mt-8">Last updated: {{ date('F d, Y') }}</p>
    </div>

</div>
@endsection
