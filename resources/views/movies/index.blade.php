<x-layout>

    <div class="flex justify-between px-3 items-center">
        <x-page-title>Find your movie...</x-page-title>

        <a href="{{ route('movies.create') }}"
            class="font-bold text-lg px-3 py-2 border-2 border-white/20 rounded-sm hover:border-primary hover:text-primary transition-colors transition-duration-400">Add
            New Movie</a>
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
