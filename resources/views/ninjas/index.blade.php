<x-layout>
    <h2>Available</h2>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja->id }}" :highlights="$ninja['skill'] > 70">
                    <p>{{ $ninja->name }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
