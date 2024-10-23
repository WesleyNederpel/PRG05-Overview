<x-app-layout pagename="Edit LEGO set">
    <form action="{{ route('sets.update', $set->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $set->name }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="img_url">Image URL</label>
            <input type="text" id="img_url" name="img_url" value="{{ $set->img_url }}">
            @error('img_url')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="brand">Brand</label>
            <select name="brand_id" id="brand_id">
                <option value="" disabled>Kies een merk</option>
                @foreach($brands as $brand)
                    <option
                        value="{{ $brand->id }}" {{ $set->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('sets.show', $set->id) }}">Cancel</a>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
