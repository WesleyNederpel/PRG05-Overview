@props(['set'])
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Approval') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <li>{{ $set->name }}</li>
                        <li>{{ $set->user->name }}</li>
                        <li><img src="{{ $set->img_url }}" alt="{{ $set->name }}"></li>
                        <li>
                            @if($set->activity == '1')
                                <form action="{{ route('admin.update', $set->id) }}" method="post"
                                      class="mt-6 space-y-6">
                                    @csrf
                                    @method('PATCH')
                                    <label for="activity"></label>
                                    <input type="hidden" name="activity" id="activity" value="2">
                                    <x-primary-button type="submit">Approve</x-primary-button>
                                </form>
                            @elseif($set->activity == '2')
                                <form action="{{ route('admin.update', $set->id) }}" method="post"
                                      class="mt-6 space-y-6">
                                    @csrf
                                    @method('PATCH')
                                    <label for="activity"></label>
                                    <input type="hidden" name="activity" id="activity" value="1">
                                    <x-secondary-button type="submit">Disapprove</x-secondary-button>
                                </form>
                            @endif
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
