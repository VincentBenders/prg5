<x-layout>
@foreach($cards as $card)

        <h1>{{ $card->name }}</h1>
        <h2>{{ $card->type }}</h2>
        <p>{{ $card->description }}</p>

@endforeach
</x-layout>
