{{-- resources/views/pages/game-room.blade.php --}}
@extends('layouts.app')

@section('title', 'Game Room - ' . $gameRoom->code)

@section('content')
<div class="min-h-screen bg-gradient-to-br from-rose-50 via-purple-50 to-indigo-50 py-12 px-4"
     x-data="gameRoom()"
     x-init="init()">

    <div class="max-w-4xl mx-auto">
        {{-- Header --}}
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-md mb-4"><div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div>
                <span class="font-bold text-gray-700">Room Code:</span>
                <span class="font-mono text-xl font-black text-rose-600">{{ $gameRoom->code }}</span>
                <button @click="copyCode()" class="ml-2 text-gray-400 hover:text-rose-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                    </svg>
                </button>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <span class="bg-{{ $gameRoom->vibe_type->colors()['from'] }} text-white px-3 py-1 rounded-lg">
                    {{ $gameRoom->vibe_type->label() }}
                </span>
            </h1>
            <p class="text-gray-600">{{ $gameRoom->vibe_type->description() }}</p>
        </div>

        {{-- Waiting for Partner --}}
        <div x-show="!partnerConnected" x-cloak class="text-center py-12">
            <div class="bg-white rounded-3xl shadow-xl p-12 max-w-md mx-auto">
                <div class="w-20 h-20 bg-gradient-to-br from-rose-400 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-10 h-10 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Waiting for your partner...</h2>
                <p class="text-gray-500 mb-6">Share this link or code with them:</p>

                <div class="bg-gray-50 rounded-xl p-4 mb-4">
                    <p class="text-sm text-gray-600 mb-2">Link:</p>
                    <div class="flex items-center gap-2 bg-white p-3 rounded-lg border border-gray-200">
                        <input type="text"
                               x-ref="shareLink"
                               value="{{ route('game.join', $gameRoom->code) }}"
                               readonly
                               class="flex-1 text-sm text-gray-700 bg-transparent border-none focus:outline-none">
                        <button @click="copyLink()" class="text-rose-600 hover:text-rose-700 font-semibold text-sm">
                            Copy
                        </button>
                    </div>
                </div>

                <div class="flex gap-4">
                    <button @click="shareViaWhatsApp()" class="flex-1 bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-xl font-bold transition-all">
                        WhatsApp
                    </button>
                    <button @click="shareViaSMS()" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-3 px-4 rounded-xl font-bold transition-all">
                        SMS
                    </button>
                </div>
            </div>
        </div>

        {{-- Game Content --}}
        <div x-show="partnerConnected" x-cloak>
            {{-- Progress Bar --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-semibold text-gray-600">Progress</span>
                    <span class="text-sm font-bold text-rose-600" x-text="`${currentQuestion + 1} / ${totalQuestions}`"></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                    <div class="bg-gradient-to-r from-rose-500 to-purple-500 h-full rounded-full transition-all duration-500"
                         :style="`width: ${((currentQuestion + 1) / totalQuestions) * 100}%`"></div>
                </div>
            </div>

            {{-- Question Card --}}
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 mb-6">
                <div class="flex items-center justify-between mb-6">
                    <span class="bg-rose-100 text-rose-600 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider border border-rose-200">
                        Question <span x-text="currentQuestion + 1"></span>
                    </span>

                    {{-- Partner Status --}}
                    <div x-show="partnerIsTyping" class="flex items-center gap-2 text-sm text-gray-500">
                        <div class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </div>
                        <span class="font-medium">Partner is typing...</span>
                    </div>
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-8 serif" x-text="currentQuestionText"></h2>

                {{-- Answer Input --}}
                <div x-show="!answered">
                    <textarea x-model="answer"
                              @input="handleTyping()"
                              placeholder="Type your answer here..."
                              rows="5"
                              class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:border-rose-500 focus:outline-none resize-none text-lg"
                              :disabled="answered"></textarea>

                    <button @click="submitAnswer()"
                            :disabled="answer.trim() === ''"
                            :class="answer.trim() === '' ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-xl hover:-translate-y-1'"
                            class="w-full mt-4 bg-gradient-to-r from-rose-600 to-rose-500 text-white py-4 px-6 rounded-2xl font-bold text-lg transition-all active:scale-95 shadow-lg shadow-rose-500/20">
                        Submit Answer
                    </button>
                </div>

                {{-- Waiting for Partner --}}
                <div x-show="answered && !bothAnswered" x-cloak class="text-center py-8">
                    <div class="inline-block">
                        <div class="w-16 h-16 border-4 border-rose-200 border-t-rose-600 rounded-full animate-spin mx-auto mb-4"></div>
                        <p class="text-gray-600 font-medium">Waiting for your partner to answer...</p>
                    </div>
                </div>

                {{-- Reveal Answers --}}
                <div x-show="bothAnswered && !revealed" x-cloak class="text-center py-8">
                    <button @click="revealAnswers()"
                            class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 px-8 rounded-2xl font-bold text-lg shadow-xl shadow-purple-500/30 hover:shadow-purple-500/50 hover:-translate-y-1 transition-all active:scale-95">
                        🎉 Reveal Answers!
                    </button>
                </div>
            </div>

            {{-- Revealed Answers --}}
            <div x-show="revealed" x-cloak class="grid md:grid-cols-2 gap-6 mb-6">
                {{-- Your Answer --}}
                <div class="bg-gradient-to-br from-rose-500 to-pink-600 rounded-3xl p-6 text-white shadow-xl">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                            <span class="text-xl">👤</span>
                        </div>
                        <span class="font-bold text-lg">Your Answer</span>
                    </div>
                    <p class="text-lg leading-relaxed" x-text="yourAnswer"></p>
                </div>

                {{-- Partner's Answer --}}
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-6 shadow-xl">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <span class="text-xl">💕</span>
                        </div>
                        <span class="font-bold text-lg text-gray-900">Partner's Answer</span>
                    </div>
                    <p class="text-lg leading-relaxed text-gray-800" x-text="partnerAnswer"></p>
                </div>
            </div>

            {{-- Next Question Button --}}
            <div x-show="revealed" x-cloak class="text-center">
                <button @click="nextQuestion()"
                        class="bg-gradient-to-r from-rose-600 to-rose-500 text-white py-4 px-12 rounded-2xl font-bold text-lg shadow-xl shadow-rose-500/20 hover:shadow-rose-500/40 hover:-translate-y-1 transition-all active:scale-95">
                    Next Question →
                </button>
            </div>

            {{-- Game Complete --}}
            <div x-show="gameComplete" x-cloak class="bg-white rounded-3xl shadow-2xl p-12 text-center">
                <div class="text-6xl mb-6">🎉</div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Game Complete!</h2>
                <p class="text-xl text-gray-600 mb-8">You've completed all questions together.</p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" class="px-8 py-4 bg-gradient-to-r from-rose-600 to-rose-500 text-white rounded-2xl font-bold hover:shadow-xl transition-all">
                        Play Again
                    </a>
                    <button @click="downloadResults()" class="px-8 py-4 bg-white border-2 border-gray-200 text-gray-700 rounded-2xl font-bold hover:bg-gray-50 transition-all">
                        Download Answers
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function gameRoom() {
    return {
        gameRoomCode: '{{ $gameRoom->code }}',
        partnerConnected: {{ $gameRoom->participants()->count() >= 2 ? 'true' : 'false' }},
        currentQuestion: 0,
        totalQuestions: {{ $gameRoom->questions()->count() }},
        currentQuestionText: '',
        answer: '',
        answered: false,
        bothAnswered: false,
        revealed: false,
        yourAnswer: '',
        partnerAnswer: '',
        partnerIsTyping: false,
        gameComplete: false,
        typingTimeout: null,

        init() {
            this.loadQuestion();
            this.connectWebSocket();
        },

        loadQuestion() {
            // Load question from backend
            fetch(`/api/game-rooms/${this.gameRoomCode}/questions/${this.currentQuestion}`)
                .then(response => response.json())
                .then(data => {
                    this.currentQuestionText = data.question.text;
                });
        },

        connectWebSocket() {
            // WebSocket connection for real-time updates
            // Using Laravel Echo (to be implemented)
            Echo.channel(`game-room.${this.gameRoomCode}`)
                .listen('PartnerJoined', (e) => {
                    this.partnerConnected = true;
                })
                .listen('PartnerTyping', (e) => {
                    this.partnerIsTyping = e.isTyping;
                })
                .listen('AnswerSubmitted', (e) => {
                    this.checkBothAnswered();
                });
        },

        handleTyping() {
            clearTimeout(this.typingTimeout);

            // Broadcast typing status
            this.broadcastTyping(true);

            this.typingTimeout = setTimeout(() => {
                this.broadcastTyping(false);
            }, 1000);
        },

        broadcastTyping(isTyping) {
            fetch(`/api/game-rooms/${this.gameRoomCode}/typing`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ is_typing: isTyping })
            });
        },

        submitAnswer() {
            fetch(`/api/game-rooms/${this.gameRoomCode}/answers`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    question_id: this.currentQuestion,
                    answer: this.answer
                })
            })
            .then(response => response.json())
            .then(data => {
                this.answered = true;
                this.yourAnswer = this.answer;
                this.checkBothAnswered();
            });
        },

        checkBothAnswered() {
            fetch(`/api/game-rooms/${this.gameRoomCode}/questions/${this.currentQuestion}/status`)
                .then(response => response.json())
                .then(data => {
                    this.bothAnswered = data.both_answered;
                });
        },

        revealAnswers() {
            fetch(`/api/game-rooms/${this.gameRoomCode}/questions/${this.currentQuestion}/answers`)
                .then(response => response.json())
                .then(data => {
                    this.partnerAnswer = data.partner_answer;
                    this.revealed = true;
                });
        },

        nextQuestion() {
            this.currentQuestion++;

            if (this.currentQuestion >= this.totalQuestions) {
                this.gameComplete = true;
                return;
            }

            this.answer = '';
            this.answered = false;
            this.bothAnswered = false;
            this.revealed = false;
            this.yourAnswer = '';
            this.partnerAnswer = '';

            this.loadQuestion();
        },

        copyCode() {
            navigator.clipboard.writeText(this.gameRoomCode);
            alert('Room code copied!');
        },

        copyLink() {
            navigator.clipboard.writeText(this.$refs.shareLink.value);
            alert('Link copied to clipboard!');
        },

        shareViaWhatsApp() {
            const text = `Let's play CoupleSync! Join my game room: ${window.location.origin}/join/${this.gameRoomCode}`;
            window.open(`https://wa.me/?text=${encodeURIComponent(text)}`, '_blank');
        },

        shareViaSMS() {
            const text = `Let's play CoupleSync! Join my game room: ${window.location.origin}/join/${this.gameRoomCode}`;
            window.location.href = `sms:?body=${encodeURIComponent(text)}`;
        },

        downloadResults() {
            window.location.href = `/api/game-rooms/${this.gameRoomCode}/download`;
        }
    }
}
</script>
@endpush
@endsection
