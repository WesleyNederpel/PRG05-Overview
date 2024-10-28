@props(['set'])
<ul>
    <li>{{ $set->name }}</li>
    <li>{{ $set->user->name }}</li>
    <li>
        @if($set->activity == '1')
            <form action="{{ route('admin.update', $set->id) }}" method="post">
                @csrf
                @method('PATCH')
                <label for="activity"></label>
                <input type="hidden" name="activity" id="activity" value="2">
                <button type="submit">Approve</button>
            </form>
            @elseif($set->activity == '2')
            <form action="{{ route('admin.update', $set->id) }}" method="post">
                @csrf
                @method('PATCH')
                <label for="activity"></label>
                <input type="hidden" name="activity" id="activity" value="1">
                <button type="submit">Disapprove</button>
            </form>
        @endif
    </li>
</ul>
