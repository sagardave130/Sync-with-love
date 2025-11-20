@extends('layouts.app')

@section('title', 'Terms & Conditions')
@section('meta_description', 'Review the terms and conditions for using SyncWithLove. Understand your rights, responsibilities, and usage guidelines.')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-purple-50 to-white py-16">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mx-auto mb-12 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Terms & Conditions
        </h1>
        <p class="text-gray-600 text-lg">
            Please read these terms carefully before using SyncWithLove.
        </p>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 md:p-12 space-y-8">

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">1. Acceptance of Terms</h2>
            <p class="text-gray-600 leading-relaxed">
                By using SyncWithLove, you agree to these Terms & Conditions.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">2. Use of Service</h2>
            <p class="text-gray-600 leading-relaxed">
                SyncWithLove provides romantic and playful couple quizzes. You agree to use the platform responsibly
                and avoid harmful behavior or actions that disrupt the experience for others.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">3. Content Ownership</h2>
            <p class="text-gray-600 leading-relaxed">
                All questions, UI elements, branding, and game frameworks belong to SyncWithLove.
                You may not reuse or redistribute them commercially without permission.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">4. Temporary Data</h2>
            <p class="text-gray-600 leading-relaxed">
                Answers are stored only temporarily for gameplay functionality (sync or async mode).
                No long-term user profiles or history are kept unless stored locally on your own device.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">5. Liability</h2>
            <p class="text-gray-600 leading-relaxed">
                We are not responsible for emotional, personal, or relational outcomes arising from
                quiz content or partner responses. Use the app at your discretion.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">6. Modifications</h2>
            <p class="text-gray-600 leading-relaxed">
                We may update these terms at any time. Continued use after updates constitutes acceptance.
            </p>
        </section>

        <p class="text-gray-500 text-sm mt-8">Last updated: {{ date('F d, Y') }}</p>
    </div>

</div>
@endsection
