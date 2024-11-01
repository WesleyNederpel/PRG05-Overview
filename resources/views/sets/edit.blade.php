<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit LEGO Set') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('sets.update', $set->id) }}" method="post" class="mt-6 space-y-6">
                        @csrf
                        @method('PATCH')
                        <div>
                            <x-input-label for="name">Name</x-input-label>
                            <x-text-input type="text" id="name" name="name" value="{{ $set->name }}"></x-text-input>
                            @error('name')
                            <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="img_url">Image URL</x-input-label>
                            <x-text-input type="text" id="img_url" name="img_url"
                                          value="{{ $set->img_url }}"></x-text-input>
                            @error('img_url')
                            <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="brand">Brand</x-input-label>
                            <select name="brand_id" id="brand_id"
                                    class="mt-1 block border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled>Kies een merk</option>
                                @foreach($brands as $brand)
                                    <option
                                        value="{{ $brand->id }}" {{ $set->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-primary-button type="submit">Update</x-primary-button>
                        <x-secondary-button><a href="{{ route('sets.show', $set->id) }}">Cancel</a></x-secondary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
