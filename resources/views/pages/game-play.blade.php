{{-- resources/views/pages/game-play.blade.php --}}
@extends('layouts.app')

@section('title', 'Playing - ' . $gameRoom->code)

@section('content')
<div class="min-h-screen bg-gradient-to-br from-rose-50 via-purple-50 to-indigo-50"
     x-data="gamePlay()"
     x-init="init()">

    {{-- Header --}}
    <div class="sticky top-0 z-40 bg-white/80 backdrop-blur-md border-b border-gray-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 md:px-6 py-3 md:py-4">
            <div class="flex items-center justify-between gap-4">
                {{-- Leave Button --}}
                <button @click="confirmLeave()"
                        class="text-gray-600 hover:text-gray-900 font-semibold text-sm transition-colors">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>

                {{-- Progress --}}
                <div class="flex-1 max-w-xs">
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-xs font-bold text-gray-500">Question</span>
                        <span class="text-xs font-bold text-rose-600" x-text="`${currentQuestion + 1}/${totalQuestions}`"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-rose-500 via-purple-500 to-indigo-500 h-full rounded-full transition-all duration-500"
                             :style="`width: ${((currentQuestion + 1) / totalQuestions) * 100}%`"></div>
                    </div>
                </div>

                {{-- Room Code --}}
                <div class="hidden md:flex items-center gap-2 px-3 py-1.5 bg-gray-100 rounded-full">
                    <span class="text-xs font-mono font-bold text-gray-700">{{ $gameRoom->code }}</span>
                </div>
            </div>
        </div>
    </div>

   