<x-layout>
    <h2>Currently Available Ninjas</h2>

    @if ($greeting == 'hello')
        <p>Hi from inside the if statement</p>
    @endif

    <p>{{ $greeting }}</p>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}">
                    <h3>{{ $ninja['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
