<footer class="w-full inset-shadow-sm mt-12 py-6 px-4 bg-white">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-gray-600">
        
        {{-- Left --}}
        <div class="mb-4 md:mb-0">
            © {{ date('Y') }} {{ config('app.name', 'NovaNest') }}. All rights reserved.
        </div>

        {{-- Center --}}
        <div class="flex space-x-6 mb-4 md:mb-0">
            <a href="/" class="hover:text-black">Home</a>
            <a href="/careers" class="hover:text-black">Careers</a>
            <a href="/salaries" class="hover:text-black">Salaries</a>
            <a href="/companies" class="hover:text-black">Companies</a>
        </div>

        {{-- Right --}}
        <div>
            Built with <span class="text-red-500">♥</span> & Laravel
        </div>

    </div>
</footer>