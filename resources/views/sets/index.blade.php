<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LEGO Sets') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @auth
                        @if (Auth::user()->hasEnoughLogins())
                            <x-secondary-button class="mt-6"><a href="{{ route('sets.create') }}">Add LEGO set</a>
                            </x-secondary-button>
                        @else
                            <span class="text-sm text-red-600 dark:text-red-400">You need to have logged in at least 5 times to add a LEGO set.</span>
                        @endif
                    @endauth

                    <form method="GET" action="{{ route('sets.index') }}" class="mt-6 space-y-6">
                        <x-input-label for="brand">Filter by Brand:</x-input-label>
                        <select name="brand" id="brand"
                                class="mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="">All Brands</option>
                            @foreach($brands as $brand)
                                <option
                                    value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-primary-button type="submit">Filter</x-primary-button>
                    </form>
                    <form action="{{ route('sets.search') }}" method="GET" class="mt-6 space-y-6">
                        <x-text-input type="text" name="search" placeholder="Zoek naar een LEGO set"></x-text-input>
                        <x-primary-button type="submit">Zoek</x-primary-button>
                    </form>

                    @if($sets->isEmpty())
                        <p>No LEGO sets found.</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($sets as $set)
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                                    <h2>{{ $set->name }}</h2>
                                    <x-secondary-button><a href="{{ route('sets.show', $set->id) }}">Details</a>
                                    </x-secondary-button>
                                    <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
