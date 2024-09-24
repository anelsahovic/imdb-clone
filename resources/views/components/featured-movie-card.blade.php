<div
    class="relative max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em] rounded-lg overflow-hidden shadow-lg hover:opacity-80 transition-all">

    <a href="{{ route('movies.show', $movie) }}">
        <img class="w-full h-[600px] object-cover" src="{{ $movie->img_url }}" alt="Movie Poster" />



        <div
            class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white">

            <div class="flex justify-between items-center mb-3">
                <div class="text-sm font-semibold">
                    <p>{{ $movie->year_published }}</p>
                </div>
                <div class="text-lg font-bold text-yellow-600">
                    <i class="fa-solid fa-star"></i> {{ $movie->rating }}
                </div>
            </div>

            <h1 class="text-2xl font-bold">{{ $movie->title }}</h1>


            <p class="text-sm text-gray-300 mt-3 line-clamp-3">{{ $movie->description }}</p>


            <div class="flex justify-between items-center mt-5">
                <div class="flex space-x-2">
                    @foreach ($movie->tags as $tag)
                        <x-tag>{{ $tag->name }}</x-tag>
                    @endforeach
                </div>
                <div class="flex space-x-2">
                    @foreach ($movie->genres as $genre)
                        <x-tag>{{ $genre->name }}</x-tag>
                    @endforeach
                </div>
            </div>
        </div>
    </a>

</div>
