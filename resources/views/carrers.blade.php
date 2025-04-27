<x-layout>
    <x-section>
        <h2 class="text-2xl font-bold mb-2">Our Mission</h2>
        <p class="text-gray-700">We’re building the future of hiring by connecting talented developers with companies that care. At NextStep Collective, we value creativity, kindness, and code that makes lives better.</p>
    </x-section>
    <x-section>
        <h2 class="text-2xl font-bold mb-4">Life at Our Company</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex justify-center">
                <img src="{{ Vite::asset('resources/images/NextStep__coworkers_ranging_in_age_from_late_1.jpg') }}" alt="Team smiling" class="rounded-xl shadow" />
            </div>
            <div class="flex justify-center">
                <img src="{{ Vite::asset('resources/images/NextStep_team_of_five_3.jpg') }}" alt="Hackathon photo" class="rounded-xl shadow" />
            </div>
            <div class="flex justify-center">
                <img src="{{ Vite::asset('resources/images/NextStep__office_with_an_open_workspace_fil_2.jpg') }}" alt="Office space" class="rounded-xl shadow" />
            </div>
        </div>
    </x-section>

    <x-section>
        <h2 class="text-2xl font-bold mb-4">We’re Hiring In:</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Engineering</li>
            <li>Product & Design</li>
            <li>Marketing</li>
            <li>People & Culture</li>
        </ul>
    </x-section>
    
    <x-section>
        <h2 class="text-2xl font-bold mb-4">What You Get</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="p-4 bg-green-50 rounded-xl shadow">
                <h3 class="font-semibold text-lg mb-1">Remote First</h3>
                <p class="text-gray-600">Work from anywhere, anytime. We care about results, not office hours.</p>
            </div>
            <div class="p-4 bg-blue-50 rounded-xl shadow">
                <h3 class="font-semibold text-lg mb-1">Wellness Stipend</h3>
                <p class="text-gray-600">Gym, therapy, yoga — we help you stay balanced.</p>
            </div>
            <!-- Add more benefits -->
        </div>
    </x-section>
    
    <x-section>
        <h2 class="text-2xl font-bold mb-2">Ready to Join Us?</h2>
        <p class="text-gray-600 mb-4">Check out our open positions and find the right fit for you.</p>
        <x-link-button href="/">
            View Open Jobs
        </x-link-button>
    </x-section>
    

</x-layout>