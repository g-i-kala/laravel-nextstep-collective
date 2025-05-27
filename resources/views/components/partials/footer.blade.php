<footer class="w-full inset-shadow-sm mt-12 py-6 px-4 bg-bg">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-muted-text">

        {{-- Left --}}
        <div class="mb-4 md:mb-0">
            © {{ date('Y') }} {{ config('app.name', 'NovaNest') }}. All rights reserved.
        </div>

        {{-- Center --}}
        <div class="flex space-x-6 mb-4 md:mb-0">
            <a href="/" class="hover:text-text">Home</a>
            <a href="/careers" class="hover:text-text">Careers</a>
            <a href="/salaries" class="hover:text-text">Salaries</a>
            <a href="/companies" class="hover:text-text">Companies</a>
        </div>

        {{-- Right --}}
        <div>
            Built with <span class="text-red-500">♥</span> & Laravel
        </div>

    </div>
</footer>
