@php
    $classes = 'p-4 bg-bg/5 rounded-xl border border-transparent transition-colors duration-300';
@endphp


<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
