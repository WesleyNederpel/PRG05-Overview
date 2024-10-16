<x-main pagename="LEGOsets">
    <h1>LEGO sets</h1>
    <a href="{{ route('sets.create') }}">Add LEGO set</a>
    @foreach($sets as $set)
        <h2>{{ $set->name }}</h2>
        <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}">
    @endforeach
</x-main>
