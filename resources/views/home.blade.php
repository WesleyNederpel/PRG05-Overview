<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to BrickBazar!') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Welcome to BrickBazar!</p>

                    <p class="mb-4">Here, you'll find a fantastic collection of LEGO Speed Champions sets uploaded by our vibrant
                        community of LEGO enthusiasts.</p>

                    <p class="mb-4">As a member, you can also contribute by uploading your own Speed Champions sets, but remember,
                        you'll need to log in at least 5 times before you can share your creations.</p>

                    <p class="mb-4">Once you’ve added a set, it will undergo approval by our admins to ensure quality and compliance
                        before it appears on the public LEGO Sets page. In the meantime, you can view your uploaded sets
                        on the 'Uploaded by You' page.</p>

                    <p>Join us in building an amazing collection of LEGO Speed Champions and let your creativity
                        shine!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
