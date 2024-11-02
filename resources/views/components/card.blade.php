@props([
    'id' => 1,
    'highlight' => false
    ])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="/ninjas/{{ $id }}" class="btn">View Details</a>
</div>