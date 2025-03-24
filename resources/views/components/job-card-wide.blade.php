@props(['job'])

<x-panel class="flex flex-row gap-6">
    <div>
        <x-employer-logo />
    </div>
    
    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-gray-200">Laracast</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">Video Producer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>

    <div class="space-y-1">
        @foreach ($job->tag as $tag )
            <x-tag> Backend </x-tag>
        @endforeach
    </div>
        
    </div>
</x-panel>