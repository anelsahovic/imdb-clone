<x-layout>

    <div class="flex justify-between px-3 items-center">
        <x-page-title>Find your movie...</x-page-title>


        Sort by


    </div>

    <div class="mb-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 mx-auto">

        @foreach ($movies as $movie)
            <x-small-movie-card :$movie />
        @endforeach


    </div>

    <div class="my-3">
        {{ $movies->links() }}
    </div>

</x-layout>
