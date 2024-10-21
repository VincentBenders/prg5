
@foreach($cards as $card)
    <x-layout>
        <h1>{{ $card->name }}</h1>
        <h2>{{ $card->type }}</h2>
        <p>{{ $card->description }}</p>
    </x-layout>
@endforeach
