{{-- resources/views/components/navbar.blade.php --}}
<nav class="absolute top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-2xl serif text-gray-900 hover:opacity-80 transition-opacity">
            <div class="w-10 h-10 bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl flex items-center justify-center text-white text-lg shadow-lg shadow-rose-200">♥</div>
            <span>CoupleSync</span>
        </a>

        <a href="{{ route('enter-code') }}" class="py-2.5 px-6 text-sm rounded-full border-2 border-gray-200 hover:border-rose-300 hover:text-rose-600 bg-white/80 backdrop-blur-sm font-semibold transition-all active:scale-95">
            Enter Code
        </a>
    </div>
</nav>
