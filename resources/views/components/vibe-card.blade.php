{{-- resources/views/components/vibe-card.blade.php --}}
<div class="relative min-h-[320px] rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group flex flex-col cursor-pointer">
    <div class="absolute inset-0 bg-gradient-to-br from-{{ $gradientFrom }} to-{{ $gradientTo }}"></div>
    <div class="absolute inset-0 opacity-30" style="background-image: {{ $pattern }}"></div>

    <div class="relative h-full p-6 flex flex-col justify-between text-white z-10 flex-1">
        <div>
            <div class="bg-white/20 backdrop-blur-md w-12 h-12 rounded-2xl flex items-center justify-center text-2xl shadow-inner mb-4">
                {!! $icon !!}
            </div>
            <h3 class="font-bold text-2xl mb-2 font-serif leading-tight">{{ $title }}</h3>
            <p class="text-white/90 text-sm leading-relaxed font-medium">{{ $description }}</p>
        </div>

        <div class="flex gap-3 mt-6 pt-6 border-t border-white/10">
            <a href="{{ route('game.create', ['vibe' => $vibe]) }}"
               class="flex-1 bg-white/20 hover:bg-white text-white hover:text-rose-600 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white/20 backdrop-blur-sm text-center">
                Play Now
            </a>
            <a href="{{ route('game.create', ['vibe' => $vibe, 'send_quiz' => true]) }}"
               class="flex-1 bg-white hover:bg-white/90 text-gray-900 py-3 px-3 rounded-xl text-sm font-bold shadow-lg transition-all active:scale-95 border border-white text-center">
                Send Quiz
            </a>
        </div>

        <div class="absolute -bottom-4 -right-4 text-9xl opacity-10 pointer-events-none">
            {!! $icon !!}
        </div>
    </div>
</div>
