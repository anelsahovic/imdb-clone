<x-layout>

    <x-page-title>Talented persons</x-page-title>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8 px-4">
        @foreach ($persons as $person)
            <x-person-card :$person />
        @endforeach
    </div>

    <div class="my-3">
        {{ $persons->links() }}
    </div>
</x-layout>
