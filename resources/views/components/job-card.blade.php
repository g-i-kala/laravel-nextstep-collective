@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">Laracast</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl text-bold transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($job->tag as $tag )
                <x-tag size="small"> Backend </x-tag>
            @endforeach
        </div>
        <x-employer-logo :width="42"/>
    </div>
</x-panel>