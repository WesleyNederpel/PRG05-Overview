<x-app-layout>
    <x-main pagename="LEGOsets">
        <h1>LEGO sets</h1>
        @auth
            <a href="{{ route('sets.create') }}">Add LEGO set</a>
        @endauth
        @foreach($sets as $set)
            <h2>{{ $set->name }}</h2>
            <a href="{{ route('sets.show', $set->id) }}">Details</a>
            <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}">
        @auth
                <form action="{{ route('sets.destroy', $set->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
        @endauth

        @endforeach
    </x-main>
</x-app-layout>
