<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @foreach($cards as $card)
                        <div class="mb-10">
                            <p class=" text-xl mb-2">creator: {{$card->user->name}}</p>
                            <p class="font-bold text-2xl mb-2">{{ $card->name }} </p>
                            <p class=" text-xl mb-2">{{$card->color->name}} {{ $card->type }}</p>
                            <p class="mb-2">
                                {{ $card->description }}
                            </p>

                            <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" href="{{ route('cards.show', $card) }}">details</a>
                            <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" href="{{ route('cards.edit', $card) }}">bewerken</a>
                            <form action="{{route('cards.destroy', $card)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    delete
                                </button>
                            </form>
                            <form action="{{route('cards.visible', $card)}}" method="POST" >
                                @method('PUT')
                                @csrf
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    @if($card->is_visible)
                                        unpublish
                                    @else
                                        publish
                                    @endif
                                </button>
                            </form>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
