<x-app-layout pagename="Add LEGO set">
    <form action="{{ route('sets.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="img_url">Image URL</label>
            <input type="text" id="img_url" name="img_url">
            @error('img_url')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="brand">Brand</label>
            <select name="brand_id" id="brand_id">
                <option value="standaard" disabled selected>Kies een merk</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Add</button>
    </form>
</x-app-layout>
