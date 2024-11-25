<x-layout>
    <h2>Ninja name: {{ $ninja->name }}</h2>

    <div class="wild-card">
        <p><strong>Skill level:</strong> {{ $ninja->skill }} </p>
        <p><strong>About me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    {{-- dojo info --}}
    <div class="white-box">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{ $ninja->dojo->description }}</p>
    </div>

    <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Delete Ninja</button>
    </form>
</x-layout>