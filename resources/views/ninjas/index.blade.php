<x-layout>
    <h2>Currently Avalable Ninjas</h2>

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card :id="$ninja['id']" :highlight="$ninja['skill'] > 70">
                    <h3>{{ $ninja->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>