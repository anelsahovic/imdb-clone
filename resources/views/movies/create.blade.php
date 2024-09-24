<x-layout>
    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-video"></i> MOVIES</x-page-title>
        </div>

        <div
            class="flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em] py-10 bg-white/10 rounded-2xl shadow-xl my-10">
            <div class="w-full text-center mb-3 border-b-2 border-white/20">
                <h2 class="text-xl font-bold">Add new movie</h2>
            </div>

            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                    <div class="mb-4">
                        <label for="title" class="block text-white font-semibold mb-2 ml-1">Title</label>
                        <input type="text" id="title" name="title" placeholder="Movie name"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('title') }}">
                    </div>
                    <div class="mb-4">
                        <label for="year_published" class="block text-white font-semibold mb-2 ml-1">Year
                            Published</label>
                        <input type="text" id="year_published" name="year_published" placeholder="2024"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('year_published') }}">
                    </div>
                    <div class="mb-4">
                        <label for="rating" class="block text-white font-semibold mb-2 ml-1">Rating</label>
                        <input type="text" id="rating" name="rating" placeholder="8.9"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('rating') }}">
                    </div>
                    <div class="mb-4">
                        <label for="director_id" class="block text-white font-semibold mb-2 ml-1">Director</label>
                        <input type="text" id="director_id" name="director_id" placeholder="Director id"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('director_id') }}">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="img_url" class="block text-white font-semibold mb-2 ml-1">Img Url</label>
                    <input type="text" id="img_url" name="img_url" placeholder="https://imageurl.com"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required value="{{ old('img_url') }}">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-white font-semibold mb-2 ml-1">Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>{{ old('description') }}</textarea>
                </div>


                <div class="mb-4">
                    <label for="genres" class="block text-white font-semibold mb-2 ml-1">Genres</label>
                    <select name="genres[]" id="genres"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="tags" class="block text-white font-semibold mb-2 ml-1">Tags</label>
                    <select name="tags[]" id="tags"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="actors" class="block text-white font-semibold mb-2 ml-1">Actors</label>
                    <select name="actors[]" id="actors"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        multiple>
                        @foreach ($actors as $actor)
                            <option value="{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center my-2">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>

                <div class="flex justify-evenly items-center">
                    <div class="flex items-center space-x-3">
                        <label for="featured" class="text-white font-semibold ml-1">Featured</label>
                        <input type="checkbox" id="featured" name="featured" value="1"
                            class="w-6 h-6 text-primary bg-gray-800 border-2 border-gray-400 rounded-lg focus:ring-primary focus:ring-2 transition duration-300 checked:bg-primary checked:border-primary focus:outline-none">
                    </div>

                    <div>
                        <button
                            class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-full bg-primary hover:bg-primary/50 transition-colors duration-400">
                            Add <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
