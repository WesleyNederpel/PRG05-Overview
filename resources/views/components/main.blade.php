<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pagename }}</title>
</head>
<body>
<nav>
    <x-link href="/" :active="Route::is('home')">Home</x-link>
    <x-link href="/about" :active="Route::is('about')">About Us</x-link>
    <x-link href="/sets" :active="Route::is('sets')">List of Legosets</x-link>
    <x-link href="/login" :active="Route::is('login')">Log in</x-link>
    <x-link href="/register" :active="Route::is('register')">Register</x-link>
</nav>

{{ $slot }}

<footer>

</footer>
</body>
</html>
