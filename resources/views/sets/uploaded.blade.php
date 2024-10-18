<x-app-layout>
    <h1>Your LEGO sets</h1>
    <ul>
        @foreach($sets as $set)
            <li>{{$set->name}} - <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}"></li>
        @endforeach
    </ul>
</x-app-layout>
