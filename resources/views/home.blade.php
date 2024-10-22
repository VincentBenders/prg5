<x-layout>
@foreach($cards as $card)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="font-bold text-xl mb-2">{{ $card->name }}</div>
            {{ $card->type }}
            <p class="text-gray-700 text-base">
                {{ $card->description }}
            </p>
            <a href="/details/{{$card->id}}">view card</a>
        </div>
@endforeach
</x-layout>
