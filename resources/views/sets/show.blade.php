<x-main pagename="{{ $sets->name }}">
    <h2>{{ $sets->name }}</h2>
    <img src="{{ asset($sets->img_url) }}" alt="{{ $sets->name }}">
</x-main>