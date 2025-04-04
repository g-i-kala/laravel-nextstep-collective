@props(['job'])

<x-panel class="flex flex-row gap-6">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>
    
    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-gray-200">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>
    <div class="flex flex-col justify-between">
        <div class="space-y-1">
            @foreach ($job->tags as $tag )
                <x-tag :$tag />
            @endforeach
        </div>
        @auth
            {{-- @if ( auth()->user()->employer && auth()->user()->employer->id === $job->employer_id )      --}}
            @if ( auth()->user()->ownsJob($job) )     
                <p></p>
                <div class="text-right">
                    <x-forms.button class="py-1 px-1 text-xs hover:bg-red-500">Delete</x-forms.button>
                </div>        
            @endif
        @endauth
        
    </div>
        
</x-panel>