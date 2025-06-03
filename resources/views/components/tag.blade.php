@props(['tag', 'size' => 'base'])

@php
    $classes =
        'border border-gray-300 bg-border/30 hover:bg-border rounded-b-xl font-bold transition-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
