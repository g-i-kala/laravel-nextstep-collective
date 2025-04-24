@if(request()->query()) 
    <x-link-button href="{{ url()->current() }}" class="">{{ $slot }} </x-link-button>
@endif