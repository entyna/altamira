<x-layouts.guest>
Ahoj z indexu

<h1 class="text-3xl">Homepage</h1>

@if ($infoboxVisible === 1)
    <x-infobox heading="{{$infoboxHeading}}" text="{{$infoboxText}}"></x-infobox>
@endif

</x-layouts.guest>