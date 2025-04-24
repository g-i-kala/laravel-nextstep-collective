@props(['job'])

<x-panel class="flex flex-row gap-6 shadow-md shadow-gray-700 transition-shadow duration-300 hover:shadow-gray-400 hover:shadow-lg">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>
    
    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
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
                {{-- <p>{{ $job->id }}</p> --}}
                <div class="flex flex-row space-x-4 justify-end items-center">
                    <div class="text-right">
                        <x-forms.button form="update-form-{{ $job->id }}" class="py-1 px-1 text-xs hover:bg-blue-400">Edit</x-forms.button>
                    </div>
                    <div class="text-right">
                        <x-forms.button form="delete-form-{{ $job->id }}" class="py-1 px-1 text-xs hover:bg-red-500">Delete</x-forms.button>
                    </div>

                    <form method="POST" action="/jobs/edit/{{ $job->id }}" id="update-form-{{ $job->id }}" class="hidden">
                        {{-- <input type="hidden" name='jobId' value={{ $job->id }}> --}}
                        @csrf
                    </form>

                    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form-{{ $job->id }}" class="hidden">
                        {{-- <input type="hidden" name='jobId' value={{ $job->id }}> --}}
                        @csrf
                        @method('DELETE')
                    </form>
                </div>  
            
            @endif
        @endauth
        
    </div>
        
</x-panel>