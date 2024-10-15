<x-main pagename="LEGOsets">
<h1>LEGO sets</h1>
    @foreach($sets as $set)
        <h2>{{ $set->name }}</h2>
        <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}">
    @endforeach
</x-main>
