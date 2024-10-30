<x-app-layout pagename="LEGO sets">
    <h1>LEGO sets</h1>
    @auth
        @if (Auth::user()->hasEnoughLogins())
            <a href="{{ route('sets.create') }}">Add LEGO set</a>
        @else
            <p>You need to have logged in at least 5 times to add a LEGO set.</p>
        @endif
    @endauth

    <form method="GET" action="{{ route('sets.index') }}">
        <label for="brand">Filter by Brand:</label>
        <select name="brand" id="brand">
            <option value="">All Brands</option>
            @foreach($brands as $brand)
                <option
                    value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>
    <form action="{{ route('sets.search') }}" method="GET">
        <input type="text" name="search" placeholder="Zoek naar een LEGO set">
        <button type="submit">Zoek</button>
    </form>
    @if($sets->isEmpty())
        <p>No LEGO sets found.</p>
    @else
        @foreach($sets as $set)
            <h2>{{ $set->name }}</h2>
            <a href="{{ route('sets.show', $set->id) }}">Details</a>
            <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}">
        @endforeach
    @endif
</x-app-layout>
