<x-layouts.app>

<p>Ahoj z editace</p>

<a href="{{ route('dashboard') }}">Zpět na přehled</a>

<form action="{{ route('dashboard.content.update') }}" method="POST" class="flex flex-col gap-4">
    @csrf
    <input 
            type="checkbox" 
            name="infobox-visible" 
            id="show_infobox" 
            value="1" 
            @if($infoboxVisible && $infoboxVisible->value) checked @endif 
        >
    <label for="infobox-visible"></label>
    <div>
        <h2>Nadpis infoboxu</h2>
            @foreach ($content['infobox-heading'] as $translation)
                <label for="infobox-heading_{{ $translation->lang }}">
                    {{ strtoupper($translation->lang) }}
                </label>
                <x-textarea 
                    name="content[infobox-heading][{{ $translation->lang }}]"
                    id="infobox-heading_{{ $translation->lang }}"
                    rows="3"
                >{{ $translation->value }}</x-textarea>
            @endforeach
    </div>
    <div>
        <h2>Text Infoboxu</h2>
        @foreach ($content['infobox-text'] as $translation)
            <label for="infobox-text_{{ $translation->lang }}">
                {{ strtoupper($translation->lang) }}
            </label>
            <x-textarea 
                name="content[infobox-text][{{ $translation->lang }}]"
                id="infobox-text_{{ $translation->lang }}"
                rows="3"
            >{{ $translation->value }}</x-textarea>
        @endforeach
    </div>
    <div class='flex'>
        <x-primary-button type="submit">Uložit změny</x-primary-button>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</form>

</x-layouts.app>