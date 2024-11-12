<x-layout>
    <h2>Ninja name: {{ $ninja->name }}</h2>

    <div class="wild-card">
        <p><strong>Skill level:</strong> {{ $ninja->skill }} </p>
        <p><strong>About me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>
</x-layout>