@props(['highlights' => false])

<div class="card" @class(['highlights' => $highlights])>

    {{ $slot }}
    <a href="{{$attributes->get('href')}}" class="btn"> View Details</a>
</div>