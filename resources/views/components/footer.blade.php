{{-- resources/views/components/footer.blade.php --}}
<footer class="mt-20 border-t border-gray-200 py-12 bg-white text-center">
    <p class="text-gray-400 text-sm mb-6">Built with ❤️ for love.</p>
    <div class="flex justify-center gap-8 text-sm font-medium text-gray-500">
        <a href="{{ route('privacy') }}" class="hover:text-rose-500 transition-colors">Privacy</a>
        <a href="{{ route('terms') }}" class="hover:text-rose-500 transition-colors">Terms</a>
        <a href="{{ route('contact') }}" class="hover:text-rose-500 transition-colors">Contact</a>
        <a href="{{ route('about') }}" class="hover:text-rose-500 transition-colors">About Us</a>
        <a href="{{ route('faq') }}" class="hover:text-rose-500 transition-colors">FAQ</a>
        <a href="{{ route('cookie') }}" class="hover:text-rose-500 transition-colors">Cookie Policy</a>
    </div>
    <div class="mt-6 text-xs text-gray-400">
        © {{ date('Y') }} CoupleSync. All rights reserved.
    </div>
</footer>
