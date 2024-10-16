<nav>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-link href="/about" :active="Route::is('about')">About Us</x-link>
    <x-link href="/sets" :active="Route::is('sets')">List of Legosets</x-link>
    <x-link href="/login" :active="Route::is('login')">Log in</x-link>
    <x-link href="/register" :active="Route::is('register')">Register</x-link>
</nav>
