<x-app-layout>
    <form action="{{ route('cards.update', ['card' => $card]) }}" method="POST" class="dark:text-white">
        @csrf
                @method('PUT')
        <div>
            <p class="text-xl">Name</p>
            <input type="text" name="name" id="" class="dark:bg-gray-800" value="{{$card->name}}">
        </div>
        <div>
            <p class="text-xl">Description</p>
            <input type="text" name="description" id="" class="dark:bg-gray-800" value="{{$card->description}}">
        </div>
        <div>
            <p class="text-xl">Type</p>
            <input type="text" name="type" id="" class="dark:bg-gray-800" value="{{$card->type}}">
        </div>
        <div>
            <p class="text-xl">Power</p>
            <input type="text" name="power" id="" class="dark:bg-gray-800" value="{{$card->power}}">
        </div>
        <div>
            <p class="text-xl">Toughness</p>
            <input type="text" name="toughness" id="" class="dark:bg-gray-800" value="{{$card->toughness}}">
        </div>
        <div>
            <p class="text-xl">Color</p>
            <select id="color" name="color" class="dark:bg-gray-800">
                <option value="1">blue</option>
                <option value="2">black</option>
                <option value="3">green</option>
                <option value="4">red</option>
                <option value="5">white</option>
                <option value="6">colorless</option>
            </select>
        </div>
        <div>
            <p class="text-xl">Mana</p>
            <div>
                <p>Blue</p>
                <input type="number" name="blue" id="" class="dark:bg-gray-800" value="{{$card->blue}}">
            </div>
            <div>
                <p>Black</p>
                <input type="number" name="black" id="" class="dark:bg-gray-800" value="{{$card->black}}">
            </div>
            <div>
                <p>Green</p>
                <input type="number" name="green" id="" class="dark:bg-gray-800" value="{{$card->green}}">
            </div>
            <div>
                <p>Red</p>
                <input type="number" name="red" id="" class="dark:bg-gray-800" value="{{$card->red}}">
            </div>
            <div>
                <p>White</p>
                <input type="number" name="white" id="" class="dark:bg-gray-800" value="{{$card->white}}">
            </div>
            <div>
                <p>Colorless</p>
                <input type="number" name="colorless" id="" class="dark:bg-gray-800" value="{{$card->colorless}}">
            </div>
            <div>
                <p>Generic</p>
                <input type="number" name="generic" id="" class="dark:bg-gray-800" value="{{$card->generic}}">
            </div>
        </div>
        <div>
            <input type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        </div>
    </form>
</x-app-layout>