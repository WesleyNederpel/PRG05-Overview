<x-app-layout>
    <h2>{{ $sets->name }}</h2>
    <img src="{{ asset($sets->img_url) }}" alt="{{ $sets->name }}">
    @can('edit-set', $sets)
        <x-secondary-button>
            <a href="{{ route('sets.edit', $sets->id) }}">Edit</a>
        </x-secondary-button>
        <form action="{{ route('sets.destroy', $sets->id) }}" method="post">
            @csrf
            @method('delete')
            <x-secondary-button type="submit">
                Delete
            </x-secondary-button>
        </form>
    @endcan
</x-app-layout>
