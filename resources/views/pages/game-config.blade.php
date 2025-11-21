{{-- resources/views/pages/game-config.blade.php --}}
@extends('layouts.app')

@section('title', 'Configure Game - ' . $gameRoom->code)

@section('content')
<div class="min-h-screen bg-[#FAFAFA] text-gray-800 font-sans relative overflow-x-hidden">
    {{-- Animated Background --}}
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-rose-200/20 rounded-full blur-[100px] animate-pulse-slow"></div>
        <div class="absolute top-[20%] right-[-5%] w-[400px] h-[400px] bg-indigo-200/20 rounded-full blur-[100px] animate-pulse-slow delay-1000"></div>
        <div class="absolute bottom-[-10%] left-[20%] w-[600px] h-[600px] bg-purple-200/20 rounded-full blur-[120px]"></div>
    </div>

    <div x-data="gameConfig()" x-init="init()">
        {{-- Header --}}
        <div class="relative z-20 px-4 md:px-6 py-4 md:py-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 max-w-6xl mx-auto">
            <a href="{{ route('home') }}"
               class="group flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-full shadow-sm hover:shadow-md transition-all text-sm font-semibold text-gray-600 hover:text-gray-900">
                <span class="group-hover:-translate-x-1 transition-transform">←</span> Leave
            </a>

            <div class="flex flex-col items-end w-full sm:w-auto">
                <div class="bg-white/80 backdrop-blur-md border border-gray-200 pl-4 pr-1 py-1 rounded-full shadow-sm flex items-center gap-3">
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Room Code</span>
                    <button @click="copyCode()"
                            class="bg-gray-900 text-white px-3 md:px-4 py-1.5 rounded-full text-xs md:text-sm font-mono font-bold tracking-widest hover:bg-black transition-colors flex items-center gap-2">
                        {{ $gameRoom->code }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 md:w-5 md:h-5">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                    </button>
                </div>
                <p class="text-[10px] text-gray-400 mt-2 font-medium pr-2">Share this code with your partner</p>
            </div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 md:px-6 pb-20">
            {{-- Participants Status --}}
            <div class="mb-8 md:mb-12 flex flex-col items-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold serif text-gray-900 mb-6 md:mb-8 text-center">
                    <span x-show="!partnerConnected">Waiting for Partner...</span>
                    <span x-show="partnerConnected" x-cloak>Connected & Ready</span>
                </h2>

                <div class="flex items-center justify-center gap-4 md:gap-8 lg:gap-12 w-full max-w-2xl">
                    {{-- Host --}}
                    <div class="flex flex-col items-center gap-2 md:gap-3 relative group">
                        <div class="w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-[1.5rem] md:rounded-[2rem] bg-white border-4 border-white shadow-[0_8px_30px_rgb(0,0,0,0.12)] flex items-center justify-center text-2xl md:text-3xl lg:text-4xl relative z-10 transition-transform group-hover:scale-105">
                            {{ $participant->avatar ?? '🐶' }}
                            <span class="absolute -top-1 -left-1 md:-top-2 md:-left-2 bg-gray-900 text-white text-[9px] md:text-[10px] font-bold px-1.5 md:px-2 py-0.5 md:py-1 rounded-full border-2 border-white">HOST</span>
                        </div>
                        <span class="font-bold text-gray-900 text-xs md:text-sm">{{ $participant->name }} (You)</span>
                    </div>

                    {{-- Connection Line --}}
                    <div class="flex-1 max-w-[80px] md:max-w-[120px] lg:max-w-[160px] h-1 bg-gray-200 rounded-full relative overflow-hidden">
                        <div x-show="partnerConnected"
                             x-cloak
                             class="absolute inset-0 bg-gradient-to-r from-rose-400 to-indigo-400 animate-pulse"></div>
                        <div x-show="!partnerConnected"
                             class="absolute inset-0 bg-gray-300 animate-pulse"></div>
                    </div>

                    {{-- Partner --}}
                    <div x-show="!partnerConnected"
                         class="flex flex-col items-center gap-2 md:gap-3 relative">
                        <div class="w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-[1.5rem] md:rounded-[2rem] bg-gray-100 border-4 border-white shadow-[0_8px_30px_rgb(0,0,0,0.12)] flex items-center justify-center text-2xl md:text-3xl lg:text-4xl relative z-10 animate-pulse">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <span class="font-bold text-xs md:text-sm text-gray-400">Waiting...</span>
                    </div>

                    <div x-show="partnerConnected"
                         x-cloak
                         class="flex flex-col items-center gap-2 md:gap-3 relative">
                        <div class="w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-[1.5rem] md:rounded-[2rem] bg-white border-4 border-white shadow-[0_8px_30px_rgb(0,0,0,0.12)] flex items-center justify-center text-2xl md:text-3xl lg:text-4xl relative z-10 animate-scale-in"
                             x-text="partnerAvatar"></div>
                        <span class="font-bold text-xs md:text-sm text-indigo-600" x-text="partnerName"></span>
                    </div>
                </div>

                {{-- Share Options (when waiting) --}}
                <div x-show="!partnerConnected"
                     x-cloak
                     class="mt-8 w-full max-w-md">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                        <p class="text-center text-sm font-semibold text-gray-700 mb-4">Share with your partner:</p>
                        <div class="flex gap-3">
                            <button @click="shareViaWhatsApp()"
                                    class="flex-1 bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-xl font-bold text-sm transition-all active:scale-95 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                WhatsApp
                            </button>
                            <button @click="copyShareLink()"
                                    class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-xl font-bold text-sm transition-all active:scale-95 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                Copy Link
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Configuration Panel --}}
            <div x-show="partnerConnected"
                 x-cloak
                 class="bg-white rounded-[2rem] md:rounded-[2.5rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] border border-gray-100 overflow-hidden animate-fade-in-up">

                {{-- Step 1: Play Mode --}}
                <div class="p-4 md:p-6 lg:p-8 border-b border-gray-100">
                    <div class="flex items-center gap-3 mb-4 md:mb-6">
                        <div class="w-7 h-7 md:w-8 md:h-8 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold text-sm">1</div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900">How do you want to play?</h3>
                    </div>

                    <div class="grid md:grid-cols-2 gap-3 md:gap-4">
                        <button @click="playMode = 'sync'"
                                :class="playMode === 'sync' ? 'border-rose-500 bg-rose-50/50' : 'border-gray-100 hover:border-indigo-200 hover:bg-gray-50'"
                                class="relative p-4 md:p-5 rounded-xl md:rounded-2xl border-2 text-left transition-all duration-200 group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-2xl bg-white w-10 h-10 flex items-center justify-center rounded-full shadow-sm border border-gray-100">⚡️</span>
                                <span x-show="playMode === 'sync'" class="text-rose-500 font-bold text-sm">Selected</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-base md:text-lg">Sync Play</h4>
                            <p class="text-xs md:text-sm text-gray-500 mt-1 leading-relaxed">Both answer privately, then results reveal together.</p>
                        </button>

                        <button @click="playMode = 'interview'"
                                :class="playMode === 'interview' ? 'border-indigo-500 bg-indigo-50/50' : 'border-gray-100 hover:border-indigo-200 hover:bg-gray-50'"
                                class="relative p-4 md:p-5 rounded-xl md:rounded-2xl border-2 text-left transition-all duration-200 group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-2xl bg-white w-10 h-10 flex items-center justify-center rounded-full shadow-sm border border-gray-100">🎤</span>
                                <span x-show="playMode === 'interview'" class="text-indigo-500 font-bold text-sm">Selected</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-base md:text-lg">Interview Mode</h4>
                            <p class="text-xs md:text-sm text-gray-500 mt-1 leading-relaxed">Host asks questions, partner answers. Good for calls.</p>
                        </button>
                    </div>
                </div>

                {{-- Step 2: Choose Vibe --}}
                <div class="p-4 md:p-6 lg:p-8 border-b border-gray-100">
                    <div class="flex items-center gap-3 mb-4 md:mb-6">
                        <div class="w-7 h-7 md:w-8 md:h-8 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-sm">2</div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900">Choose a Vibe</h3>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-3">
                        <template x-for="vibe in vibes" :key="vibe.key">
                            <button @click="selectedVibe = vibe.key"
                                    :class="selectedVibe === vibe.key ? 'border-2 border-current shadow-lg scale-105' : 'border border-gray-100 hover:border-gray-300 hover:shadow-md'"
                                    class="flex flex-col items-center p-3 md:p-4 rounded-xl md:rounded-2xl transition-all bg-white group text-center"
                                    :style="`color: ${vibe.color}`">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-lg md:text-xl mb-2 md:mb-3 transition-transform group-hover:scale-110"
                                     :class="vibe.bgClass"
                                     x-html="vibe.icon"></div>
                                <span class="font-bold text-xs md:text-sm text-gray-800" x-text="vibe.label"></span>
                            </button>
                        </template>
                    </div>
                </div>

                {{-- Step 3: Timer Settings --}}
                <div class="p-4 md:p-6 lg:p-8 bg-gray-50/50">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-6 mb-6 md:mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 md:w-8 md:h-8 rounded-xl bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm">3</div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-sm md:text-base">Question Timer</h3>
                                <p class="text-xs text-gray-500">Limit time per question?</p>
                            </div>
                        </div>

                        <div class="flex bg-white p-1 rounded-xl shadow-sm border border-gray-200 overflow-x-auto">
                            <template x-for="time in timerOptions" :key="time.value">
                                <button @click="timer = time.value"
                                        :class="timer === time.value ? 'bg-gray-900 text-white shadow-md' : 'text-gray-500 hover:text-gray-900'"
                                        class="px-3 md:px-4 py-2 md:py-2.5 rounded-lg text-xs md:text-sm font-bold transition-all whitespace-nowrap"
                                        x-text="time.label"></button>
                            </template>
                        </div>
                    </div>

                    {{-- Start Button --}}
                    <button @click="startGame()"
                            :disabled="!canStart || loading"
                            :class="!canStart || loading ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-rose-400 hover:-translate-y-1'"
                            class="w-full py-4 md:py-5 px-6 text-base md:text-lg font-bold shadow-xl rounded-2xl transition-all bg-gradient-to-r from-rose-600 to-rose-500 text-white shadow-rose-300 active:scale-95">
                        <span x-show="!loading">Start Game 🚀</span>
                        <span x-show="loading" x-cloak class="flex items-center justify-center gap-2">
                            <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Starting...
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function gameConfig() {
    return {
        gameCode: '{{ $gameRoom->code }}',
        partnerConnected: {{ $gameRoom->participants()->count() >= 2 ? 'true' : 'false' }},
        partnerName: '',
        partnerAvatar: '🦄',
        playMode: 'sync',
        selectedVibe: '{{ $gameRoom->vibe_type }}',
        timer: 0,
        loading: false,
        canStart: false,

        vibes: [
            { key: 'romantic', label: 'Romantic', color: '#f43f5e', bgClass: 'bg-rose-100 text-rose-600', icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path></svg>' },
            { key: 'spicy', label: 'Spicy', color: '#991b1b', bgClass: 'bg-red-900 text-white', icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177 7.547 7.547 0 01-1.705-1.715.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path></svg>' },
            { key: 'fun_playful', label: 'Fun & Playful', color: '#f59e0b', bgClass: 'bg-yellow-100 text-yellow-600', icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5z" clip-rule="evenodd"></path></svg>' },
            { key: 'deep_emotional', label: 'Deep & Emotional', color: '#4f46e5', bgClass: 'bg-blue-100 text-blue-600', icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813a3.75 3.75 0 002.576-2.576l.813-2.846A.75.75 0 019 4.5z" clip-rule="evenodd"></path></svg>' },
            { key: 'ai_magic', label: 'AI Magic', color: '#7c3aed', bgClass: 'bg-purple-100 text-purple-600', icon: '✨' }
        ],

        timerOptions: [
            { value: 0, label: 'Off' },
            { value: 10, label: '10s' },
            { value: 30, label: '30s' },
            { value: 60, label: '60s' },
            { value: 120, label: '2m' }
        ],

        init() {
            this.connectWebSocket();
            this.updateCanStart();
        },

        connectWebSocket() {
            // Laravel Echo WebSocket connection
            Echo.channel(`game-room.${this.gameCode}`)
                .listen('PartnerJoined', (e) => {
                    this.partnerConnected = true;
                    this.partnerName = e.partner.name;
                    this.partnerAvatar = e.partner.avatar;
                    this.updateCanStart();
                });
        },

        updateCanStart() {
            this.canStart = this.partnerConnected && this.selectedVibe !== null;
        },

        copyCode() {
            navigator.clipboard.writeText(this.gameCode);
            this.showToast('Room code copied!');
        },

        shareViaWhatsApp() {
            const text = `Let's play CoupleSync! 💕 Join my game with code: ${this.gameCode} or click: ${window.location.origin}/join/${this.gameCode}`;
            window.open(`https://wa.me/?text=${encodeURIComponent(text)}`, '_blank');
        },

        copyShareLink() {
            const link = `${window.location.origin}/join/${this.gameCode}`;
            navigator.clipboard.writeText(link);
            this.showToast('Link copied to clipboard!');
        },

        startGame() {
            if (!this.canStart) return;

            this.loading = true;

            fetch(`/api/game-rooms/${this.gameCode}/start`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    play_mode: this.playMode,
                    vibe_type: this.selectedVibe,
                    timer: this.timer
                })
            })
            .then(response => response.json())
            .then(data => {
                window.location.href = `/game/${this.gameCode}/play`;
            })
            .catch(error => {
                alert('Error starting game. Please try again.');
                this.loading = false;
            });
        },

        showToast(message) {
            // Simple toast notification
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-4 right-4 bg-gray-900 text-white px-6 py-3 rounded-xl shadow-lg z-50 animate-slide-up';
            toast.textContent = message;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
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
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-scale-in {
        animation: scale-in 0.4s ease-out;
    }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.5s ease-out;
    }

    @keyframes pulse-slow {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .delay-1000 {
        animation-delay: 1s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-8px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes slide-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-up {
        animation: slide-up 0.3s ease-out;
    }

    [x-cloak] {
        display: none !important;
    }

    /* Responsive improvements */
    @media (max-width: 640px) {
        .serif {
            font-size: clamp(1.5rem, 5vw, 2rem);
        }
    }
</style>
@endpush
@endsection
