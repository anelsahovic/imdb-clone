<x-layout>
    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-video"></i> EDIT MOVIE</x-page-title>
        </div>

        <div
            class="flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em] py-10 bg-white/10 rounded-2xl shadow-xl my-10">
            <div class="w-full text-center mb-3 border-b-2 border-white/20">
                <h2 class="text-xl font-bold">Edit Movie</h2>
            </div>

            <form action="{{ route('movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                    <div>
                        <label for="title" class="block text-white font-semibold mb-2 ml-1">Title</label>
                        <input type="text" name="title" id="title" placeholder="Movie name"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('title', $movie->title) }}">
                    </div>


                    <div>
                        <label for="year_published" class="block text-white font-semibold mb-2 ml-1">Year
                            Published</label>
                        <input type="number" name="year_published" id="year_published" placeholder="2024"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('year_published', $movie->year_published) }}">
                    </div>


                    <div>
                        <label for="rating" class="block text-white font-semibold mb-2 ml-1">Rating</label>
                        <input type="text" name="rating" id="rating" placeholder="8.9"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('rating', $movie->rating) }}">
                    </div>


                    <div>
                        <label for="director_id" class="block text-white font-semibold mb-2 ml-1">Director</label>
                        <select name="director_id" id="director_id"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                            @foreach ($directors as $director)
                                <option value="{{ $director->id }}"
                                    {{ $director->id == $movie->director_id ? 'selected' : '' }}>
                                    {{ $director->first_name }} {{ $director->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="mb-4">
                    <label for="img_url" class="block text-white font-semibold mb-2 ml-1">Image URL</label>
                    <input type="text" name="img_url" id="img_url" placeholder="https://imageurl.com"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required value="{{ old('img_url', $movie->img_url) }}">
                </div>


                <div class="mb-4">
                    <label for="description" class="block text-white font-semibold mb-2 ml-1">Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>{{ old('description', $movie->description) }}</textarea>
                </div>


                <div class="mb-4">
                    <label for="genres" class="block text-white font-semibold mb-2 ml-1">Genres</label>
                    <select name="genres[]" id="genres"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}"
                                {{ in_array($genre->id, $selectedGenres) ? 'selected' : '' }}>
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="tags" class="block text-white font-semibold mb-2 ml-1">Tags</label>
                    <select name="tags[]" id="tags"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                {{ in_array($tag->id, $selectedTags) ? 'selected' : '' }}>
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="actors" class="block text-white font-semibold mb-2 ml-1">Actors</label>
                    <select name="actors[]" id="actors"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($actors as $actor)
                            <option value="{{ $actor->id }}"
                                {{ in_array($actor->id, $selectedActors) ? 'selected' : '' }}>
                                {{ $actor->first_name }} {{ $actor->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="text-center mb-4">
                    <button type="submit"
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-full bg-primary hover:bg-primary/50 transition-colors duration-400">
                        Update Movie <i class="fa-solid fa-save"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
