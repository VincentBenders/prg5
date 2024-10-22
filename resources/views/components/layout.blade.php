<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <x-nav-link href="/">Home</x-nav-link>
    @auth
        @if(@auth()->is_admin)
            <x-nav-link href="/Admin">Admin</x-nav-link>
        @endif
    @endauth
    <x-nav-link href="/create">Create</x-nav-link>
    <x-nav-link href="/mycards">My Cards</x-nav-link>


{{--    <a href="/">Home</a>--}}
{{--    <a href="/create">Create</a>--}}
{{--    <a href="/mycards">My Cards</a>--}}
    {{$slot}}
</div>
</body>
</html>
