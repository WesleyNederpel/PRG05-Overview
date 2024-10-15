<div class="container">
    <h1>Legosets</h1>
    <ul>
        @foreach($sets as $set)
            <li>{{ $set->name }}</li>
        @endforeach
    </ul>
</div>
