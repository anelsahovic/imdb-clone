<x-layout>
    <h1 class="text-2xl my-8 md:text-4xl lg:text-5xl text-center">Find your movie...</h1>

    <div class="mb-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 mx-auto">

        @foreach ($movies as $movie)
            <x-small-movie-card :$movie />
        @endforeach


    </div>

    <div class="my-3">
        {{ $movies->links() }}
    </div>

</x-layout>
