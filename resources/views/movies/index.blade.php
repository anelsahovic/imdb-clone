<x-layout>

    <div class="flex justify-between px-5 my-7 items-center">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
            <form action="{{ route('movies.index') }}" method="GET"
                class="flex flex-col md:flex-row items-center gap-4 w-full">
                @csrf
                <!-- Search Input Container -->
                <div class="relative w-full max-w-lg">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="bg-white/20 text-white placeholder:text-gray-400 rounded-full p-3 pr-12 w-full focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                        placeholder="The Wolf of Wall Street...">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                    </div>
                </div>

                <!-- Genre Dropdown -->
                <select name="genre"
                    class="bg-zinc-700 text-white px-3 py-2 rounded-lg border border-gray-500 w-full sm:w-auto focus:ring-2 focus:ring-primary transition-all">
                    <option value="">All Genres</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ request('genre') == $genre->id ? 'selected' : '' }}>
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>

                <!-- Filter Button -->
                <button type="submit"
                    class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/60 transition-all">
                    Filter
                </button>
            </form>
        </div>






    </div>
    @if ($movies->count())
        <div class="mb-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 mx-auto">

            @foreach ($movies as $movie)
                <x-small-movie-card :$movie />
            @endforeach


        </div>
    @else
        <x-page-title>No movies found...</x-page-title>
    @endif


    <div class="my-3">
        {{ $movies->links() }}
    </div>

</x-layout>
