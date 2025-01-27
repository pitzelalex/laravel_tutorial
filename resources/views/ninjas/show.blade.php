<x-layout>
    <h2>{{ $ninja->name }}</h2>
    <div class="rounded bg-gray-200 p-4">
        <p>
            <strong>Skill level:</strong>
            {{ $ninja->skill }}
        </p>
        <p>
            <strong>about me:</strong>
            {{ $ninja->bio }}
        </p>
    </div>
</x-layout>
