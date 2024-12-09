<x-layouts.guest>

<h1 class="text-3xl">{{ __('general.home_heading') }}</h1>
<p>{{ __('general.home_description') }}</p>

@if ($infoboxVisible === 1)
    <x-infobox heading="{{$infoboxHeading}}" text="{{$infoboxText}}"></x-infobox>
@endif

</x-layouts.guest>