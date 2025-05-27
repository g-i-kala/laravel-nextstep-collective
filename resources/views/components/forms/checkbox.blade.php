@props(['label', 'name', 'isChecked' => false])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="rounded-xl bg-bg/10 border border-border/10 px-5 py-4 w-full">
        <input {{ $attributes($defaults) }}
            @if ($isChecked) checked @endif>
        <span class="pl-1">{{ $label }}</span>
    </div>
</x-forms.field>
