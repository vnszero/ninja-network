{{-- <x-card> --}}
@props([
    'href' => '#',
    'highlight' => false
])

<div @class(['highlight' => $highlight, 'card'])>
    <div class="block">
        {{ $slot }}
    </div>
    <a href="{{ $href }}" class="btn">View Details</a>
</div>