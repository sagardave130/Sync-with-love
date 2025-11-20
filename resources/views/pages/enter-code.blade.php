{{-- resources/views/pages/enter-code.blade.php --}}
@extends('layouts.app')

@section('title', 'Enter Game Code')

@section('content')
    <div
        class="min-h-screen flex items-center justify-center px-4 py-12 bg-gradient-to-br from-rose-50 via-purple-50 to-indigo-50">
        <div class="max-w-md w-full">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-3">Join a Game</h1>
                <p class="text-gray-600">Enter the 6-digit code your partner shared with you.</p>
            </div>


            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-10" x-data="{
                code: '',
                error: '',
                loading: false,
                joinGame() {
                    if (this.code.length !== 6) {
                        this.error = 'Please enter a 6-digit code';
                        return;
                    }

                    this.loading = true;
                    this.error = '';

                    fetch(`/api/game-rooms/${this.code.toUpperCase()}/join`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Invalid or expired code');
                            }
                            return response.json();
                        })
                        .then(data => {
                            window.location.href = `/game/${this.code.toUpperCase()}`;
                        })
                        .catch(err => {
                            this.error = err.message;
                            this.loading = false;
                        });
                }
            }">

                @if (session('error'))
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl">
                        {{ session('error') }}
                    </div>
                @endif

                <div x-show="error" x-cloak class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl"
                    x-text="error"></div>

                <form @submit.prevent="joinGame()">
                    <label class="block text-sm font-bold text-gray-700 mb-2">Game Code</label>
                    <input type="text" x-model="code"
                        @input="code = code.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 6)" placeholder="ABC123"
                        maxlength="6"
                        class="w-full px-6 py-4 text-center text-3xl font-mono font-bold border-2 border-gray-200 rounded-2xl focus:border-rose-500 focus:outline-none tracking-widest uppercase mb-6"
                        required autofocus>

                    <button type="submit" :disabled="loading || code.length !== 6"
                        :class="loading || code.length !== 6 ? 'opacity-50 cursor-not-allowed' :
                            'hover:shadow-xl hover:-translate-y-1'"
                        class="w-full bg-gradient-to-r from-rose-600 to-rose-500 text-white py-4 px-6 rounded-2xl font-bold text-lg transition-all active:scale-95 shadow-lg shadow-rose-500/20">
                        <span x-show="!loading">Join Game</span>
                        <span x-show="loading" x-cloak class="flex items-center justify-center gap-2">
                            <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            Joining...
                        </span>
                    </button>
                </form>

                <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                    <p class="text-gray-600 text-sm mb-4">Don't have a code?</p>
                    <a href="{{ route('home') }}"
                        class="inline-block text-rose-600 font-bold hover:text-rose-700 transition-colors">
                        Create a New Game →
                    </a>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Game codes expire after 24 hours</p>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
    @endpush
@endsection
