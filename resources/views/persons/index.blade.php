<x-layout>
    <h1 class="text-2xl my-8 md:text-4xl lg:text-5xl text-center">Talented persons.</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8 px-4">
        @foreach ($persons as $person)
            <x-person-card :$person />
        @endforeach
    </div>

    <div class="my-3">
        {{ $persons->links() }}
    </div>
</x-layout>
