@props([
    'href' => '#',
    'highlight' => false
])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $href }}" class="btn">View Details</a>
</div>