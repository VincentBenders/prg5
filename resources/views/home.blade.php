
@foreach($cards as $card)
    <div>
        <h1>{{ $card->name }}</h1>
        <h2>{{ $card->type }}</h2>
        <p>{{ $card->description }}</p>
    </div>
@endforeach
