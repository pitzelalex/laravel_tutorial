@props(['highlight' => false])

{{-- always has class of card but only has class of highlight if highlight is true --}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
