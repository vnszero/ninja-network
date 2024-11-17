<x-layout>
    <form action="{{ route('ninjas.store') }}" method="POST">
        @csrf

        <h2>Create a New Ninja</h2>

        {{-- Ninja Name --}}
        <label for="name">Ninja Name:</label>
        <input 
            type="text"
            id="name"
            name="name"
            required
        >

        {{-- Ninja Skill --}}
        <label for="skill">Ninja Skill:</label>
        <input 
            type="number"
            id="skill"
            name="skill"
            required
        >

        {{-- Ninja Bio --}}
        <label for="bio">Biography</label>
        <textarea 
            rows="5"
            id="bio"
            name="bio"
            required 
        ></textarea>

        {{-- Select Dojo --}}
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
            <option value="" disabled selected>Select a dojo</option>
            @foreach($dojos as $dojo)
                <option value="{{ $dojo->id }}">
                    {{ $dojo->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn">Create Ninja</button>
    </form>

    {{-- show errors to the user --}}
    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>