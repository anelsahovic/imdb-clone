<x-layout>
    <div
        class="flex flex-col md:flex-row bg-white/10 rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto my-10 hover:shadow-xl transition-shadow duration-300">

        <div class="md:w-1/3">
            <img src="{{ $movie->img_url }}" alt="{{ $movie->title }}" class="h-full w-full object-cover">
        </div>


        <div class="md:w-2/3 p-6 flex flex-col justify-between">

            <div class="mb-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-bold text-white">{{ $movie->title }}</h2>
                    @can('user-admin')
                        <div>
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="font-bold text-xl   hover:text-red-500 "><i
                                        class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    @endcan

                </div>


                <div class="flex items-center mt-2 space-x-2">
                    <p class="text-lg text-gray-400">({{ $movie->year_published }})</p>
                    <div class=" flex flex-wrap space-x-2">
                        @foreach ($movie->genres as $genre)
                            <span
                                class="inline-block bg-rose-950 text-white text-xs font-semibold px-2 py-1 rounded-full">
                                {{ $genre->name }}
                            </span>
                        @endforeach
                    </div>
                </div>



                <div class="mt-2 flex items-center">
                    <span class="text-yellow-400 text-lg font-bold">
                        <i class="fa-solid fa-star"></i> {{ $movie->rating }}
                    </span>
                    <p class="ml-2 text-sm text-gray-400">(Rating)</p>
                </div>
            </div>


            <div class="mb-4">
                <p class="text-gray-300">{{ Str::limit($movie->description, 120) }}</p>
            </div>


            <div class="mb-4">
                <h4 class="text-white text-lg font-semibold mb-2">Starring:</h4>
                <div class="flex flex-wrap space-x-2">
                    @foreach ($movie->actors as $actor)
                        <a href="{{ route('persons.show', $actor) }}">
                            <span class="text-sm text-gray-400 hover:border-b-2 border-primary">{{ $actor->first_name }}
                                {{ $actor->last_name }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <h4 class="text-white text-lg font-semibold mb-2">Directed by:</h4>
                <a href="{{ route('persons.show', $movie->director) }}">
                    <span
                        class="text-sm text-gray-400 hover:border-b-2 border-primary">{{ $movie->director->first_name }}
                        {{ $movie->director->last_name }}</span>
                </a>

            </div>


            <div class="mb-4">
                <h4 class="text-white text-lg font-semibold mb-2">Tags:</h4>
                <div class="flex flex-wrap space-x-2">
                    @foreach ($movie->tags as $tag)
                        <span
                            class="px-3 py-1 bg-primary text-gray-900 rounded-full text-sm">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>


            <div class="flex space-x-4 mt-auto">

                <a href="{{ route('movies.index') }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                    <i class="fa-solid fa-arrow-left"></i> Back to Movies
                </a>

                @can('user-admin')
                    <a href="{{ route('movies.edit', $movie) }}"
                        class="px-4 py-2 bg-yellow-500 text-gray-800 rounded-lg hover:bg-yellow-400">
                        <i class="fa-solid fa-pen"></i> Edit Movie
                    </a>
                @endcan

                @auth
                    <a href="{{ route('reviews.create', $movie) }}"
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-400">
                        <i class="fa-solid fa-comment"></i> Leave a Review
                    </a>
                @endauth

            </div>
        </div>
    </div>


</x-layout>
