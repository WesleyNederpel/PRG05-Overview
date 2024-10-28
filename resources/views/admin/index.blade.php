<x-app-layout>
    @foreach($sets as $set)
        <x-set-list :set="$set">

        </x-set-list>
    @endforeach
</x-app-layout>
