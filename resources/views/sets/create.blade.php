<x-main pagename="Add LEGO set">
    <form action="{{ route('sets.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="img_url">Image URL</label>
            <input type="text" id="img_url" name="img_url">
        </div>
        <div>
            <label for="brand">Brand</label>
            <select name="brand_id" id="brand_id">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Add</button>
    </form>
</x-main>
