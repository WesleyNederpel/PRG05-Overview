<x-app-layout pagename="{{ $sets->name }}">
    <h2>{{ $sets->name }}</h2>
    <img src="{{ asset($sets->img_url) }}" alt="{{ $sets->name }}">
    @auth
        @if(Auth::id() === $sets->user_id)
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
        @endif
    @endauth
</x-app-layout>
