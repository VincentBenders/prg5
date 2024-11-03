<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All cards') }}
        </h2>




    </x-slot>

    <form action="{{route('cards.search')}}" method="POST" >
        @method('GET')
        @csrf
        <div class="flex w-1/4 text-white">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <div>
                <p class="text-xl">Color</p>
                <select id="color" name="color" class="dark:bg-gray-800">
                    <option value="0">-</option>
                    <option value="1">blue</option>
                    <option value="2">black</option>
                    <option value="3">green</option>
                    <option value="4">red</option>
                    <option value="5">white</option>
                    <option value="6">colorless</option>
                </select>
            </div>
            <div class="relative w-full">
                <input type="search" id="searchbar" name="searchbar" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search for a card name"  />
                <button type="submit" class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg></button>
            </div>
        </div>
    </form>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @foreach($cards as $card)
                        <div class="mb-10">
                            <p class="font-bold text-2xl mb-2">{{ $card->name }}</p>
                            <p class=" text-xl mb-2">{{$card->color->name}} {{ $card->type }}</p>
                            <p class="mb-2">
                                {{ $card->description }}
                            </p>

                            <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" href="{{ route('cards.show', $card) }}">details</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
