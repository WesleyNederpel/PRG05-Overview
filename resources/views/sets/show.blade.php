<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LEGO Set Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ $sets->name }}</h2>
                    <img src="{{ asset($sets->img_url) }}" alt="{{ $sets->name }}">
                    @can('edit-set', $sets)
                        <div>
                            <x-primary-button>
                                <a href="{{ route('sets.edit', $sets->id) }}">Edit</a>
                            </x-primary-button>
                            <form action="{{ route('sets.destroy', $sets->id) }}" method="post" class="mt-6 space-y-6">
                                @csrf
                                @method('delete')
                                <x-secondary-button type="submit">
                                    Delete
                                </x-secondary-button>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
