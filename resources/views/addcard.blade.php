<x-layout>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <form action="" method="POST">
{{--        @method('put')--}}
        <div>
            <p>Name</p>
            <input type="text" name="name" id="">
        </div>
        <div>
            <p>Description</p>
            <input type="text" name="description" id="">
        </div>
        <div>
            <p>Type</p>
            <input type="text" name="type" id="">
        </div>
        <div>
            <p>Color</p>
            <select id="color" name="color">
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="green">green</option>
                <option value="black">black</option>
                <option value="white">white</option>
            </select>
        </div>
    </form>
</x-layout>
