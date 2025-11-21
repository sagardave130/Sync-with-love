{{-- resources/views/pages/game-setup.blade.php --}}
@extends('layouts.app')

@section('title', 'Create New Game')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-12 bg-gradient-to-br from-rose-50 via-purple-50 to-indigo-50">
    <div class="relative bg-white p-6 md:p-12 rounded-[3rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] border border-white/50 animate-scale-in max-w-lg w-full"
         x-data="gameSetup()"
         x-init="init()">

        {{-- Close Button --}}
        <a href="{{ route('home') }}"
           class="absolute top-6 right-6 md:top-8 md:right-8 p-2 rounded-full hover:bg-gray-100 text-gray-400 hover:text-gray-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>

        {{-- Header --}}
        <div class="text-center mb-8 md:mb-10">
            <div class="w-16 h-16 md:w-20 md:h-20 rounded-[2rem] mx-auto flex items-center justify-center text-3xl md:text-4xl mb-4 md:mb-6 shadow-lg bg-gradient-to-br from-rose-100 to-purple-100 animate-float">
                <span class="text-4xl">✨</span>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold serif text-gray-900 mb-2">Let's get started</h2>
            <p class="text-gray-500 text-sm md:text-base">Enter your name to generate a secure room.</p>
        </div>

        {{-- Form --}}
        <form @submit.prevent="createRoom()" class="space-y-6">
            {{-- Name Input --}}
            <div class="space-y-2 text-left">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-2">Your Name</label>
                <input x-model="name"
                       @input="validateForm()"
                       placeholder="e.g. Alex"
                       class="w-full px-4 md:px-6 py-4 md:py-5 rounded-2xl bg-gray-50 border-2 border-transparent focus:bg-white focus:border-rose-500 focus:ring-4 focus:ring-rose-500/10 transition-all outline-none text-base md:text-lg font-medium text-gray-900 placeholder-gray-300"
                       type="text"
                       maxlength="20"
                       required>
                <p x-show="name.length > 0" class="text-xs text-gray-400 ml-2" x-text="`${name.length}/20 characters`"></p>
            </div>

            {{-- Avatar Selection --}}
            <div class="space-y-2 text-left">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-2">Pick Avatar</label>
                <div class="flex flex-wrap gap-2 justify-center bg-gray-50 p-3 rounded-2xl">
                    <template x-for="(emoji, index) in avatars" :key="index">
                        <button type="button"
                                @click="selectedAvatar = emoji"
                                :class="selectedAvatar === emoji ? 'bg-white shadow-md scale-110 ring-2 ring-rose-500' : 'opacity-60 hover:opacity-100 hover:bg-gray-200'"
                                class="text-2xl p-2 md:p-3 rounded-xl transition-all"
                                x-text="emoji"></button>
                    </template>
                </div>
            </div>

            {{-- Vibe Selection (Hidden but passed via URL) --}}
            <input type="hidden" name="vibe_type" x-model="vibeType">

            {{-- Submit Button --}}
            <button type="submit"
                    :disabled="!isValid || loading"
                    :class="!isValid || loading ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-2xl hover:-translate-y-0.5'"
                    class="w-full py-4 md:py-5 px-6 rounded-2xl font-bold text-base md:text-lg shadow-xl transform transition-all bg-gradient-to-r from-rose-600 to-rose-500 text-white shadow-rose-200 active:scale-95">
                <span x-show="!loading">Create Room & Invite 🚀</span>
                <span x-show="loading" x-cloak class="flex items-center justify-center gap-2">
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Creating...
                </span>
            </button>
        </form>

        {{-- Privacy Notice --}}
        <p class="text-xs text-center text-gray-400 mt-6">
            🔒 Your data is private and will be deleted after 24 hours
        </p>
    </div>
</div>

@push('scripts')
<script>
function gameSetup() {
    return {
        name: '',
        selectedAvatar: '🐶',
        vibeType: new URLSearchParams(window.location.search).get('vibe') || 'romantic',
        loading: false,
        isValid: false,
        avatars: ['🐶', '🐱', '🐼', '🦊', '🦁', '🐯', '🦄', '🐲', '🐨', '🐵', '🐸', '🐙', '🐷', '🐻', '🐰', '🦝'],

        init() {
            this.validateForm();
        },

        validateForm() {
            this.isValid = this.name.trim().length >= 2 && this.name.trim().length <= 20;
        },

        createRoom() {
            if (!this.isValid) return;

            this.loading = true;

            fetch('/api/game-rooms', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    vibe_type: this.vibeType,
                    name: this.name.trim(),
                    avatar: this.selectedAvatar
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.code) {
                    window.location.href = `/game/${data.code}`;
                } else {
                    throw new Error('Failed to create room');
                }
            })
            .catch(error => {
                alert('Error creating room. Please try again.');
                this.loading = false;
            });
        }
    }
}
</script>
@endpush

@push('styles')
<style>
    @keyframes scale-in {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-scale-in {
        animation: scale-in 0.3s ease-out;
    }

    [x-cloak] { display: none !important; }
</style>
@endpush
@endsection
