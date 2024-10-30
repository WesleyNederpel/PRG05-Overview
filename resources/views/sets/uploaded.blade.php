<x-app-layout>
    <h1>Your LEGO sets</h1>
    @if($sets)
        <ul>
            @foreach($sets as $set)
                <li>{{$set->name}} - <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}"></li>
            @endforeach
        </ul>
    @else
        <p>You have not uploaded any sets yet.</p>
    @endif
</x-app-layout>
