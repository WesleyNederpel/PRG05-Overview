<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Uploaded LEGO Sets') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($sets)
                        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($sets as $set)
                                <li class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">{{$set->name}}
                                    <img src="{{ asset($set->img_url) }}" alt="{{ $set->name }}"></li>
                            @endforeach
                        </ul>
                    @else
                        <span class="text-sm text-red-600 dark:text-red-400">You have not uploaded any sets yet.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
