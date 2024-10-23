<x-app-layout>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <form action="{{ route('cards.store') }}" method="POST" class="dark:text-white">
{{--        @method('put')--}}
        <div>
            <p>Name</p>
            <input type="text" name="name" id="" class="dark:bg-gray-800">
        </div>
        <div>
            <p>Description</p>
            <input type="text" name="description" id="" class="dark:bg-gray-800">
        </div>
        <div>
            <p>Type</p>
            <input type="text" name="type" id="" class="dark:bg-gray-800">
        </div>
        <div>
            <p>Color</p>
            <select id="color" name="color" class="dark:bg-gray-800">
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="green">green</option>
                <option value="black">black</option>
                <option value="white">white</option>
            </select>
        </div>
        <div>
        <input type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        </div>
    </form>
</x-app-layout>
