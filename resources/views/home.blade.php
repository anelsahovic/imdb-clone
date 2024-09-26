<x-layout>

    <section class="w-full flex flex-col justify-center items-center px-4">
        <div class="my-10">
            <h1 class="text-4xl md:text-6xl lg:text-7xl text-center">Let's find a movie</h1>
        </div>

        <form action="{{ route('movies.index') }}" method="GET">
            @csrf
            <div class="mt-2 relative w-full">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="bg-white/20 rounded-full p-3 pr-10 w-full sm:w-[300px] md:w-[400px] lg:w-[500px] focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                    placeholder="The Wolf of Wall Street...">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
                </div>
            </div>

            <button hidden>Search</button>
        </form>


    </section>


    <section class="my-10">
        <a href="{{ route('movies.index') }}" class="hover:opacity-80">
            <div class="relative w-full h-96 bg-cover bg-center"
                style="background-image: url('https://www.heavenofhorror.com/wp-content/uploads/2024/06/The-Substance-2024-body-horror.jpg')">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="flex flex-col items-center justify-center h-full text-white text-center">
                    <div class="text-3xl font-bold mt-2">Check out our movies library</div>
                    <div class="text-lg mt-4">An epic journey awaits!</div>
                </div>
            </div>
        </a>

    </section>

    <section>
        <div class="w-full mt-10 flex justify-evenly items-center">
            <h1 class="font-bold text-3xl">Featured Movies</h1>
        </div>
        <div
            class="w-full mt-10 flex flex-col sm:flex-row justify-center items-center sm:space-x-8 space-y-8 sm:space-y-0">
            @foreach ($featuredMovies as $movie)
                <x-featured-movie-card :$movie />
            @endforeach
        </div>
    </section>


    <section class="my-10">
        <div class="w-full flex justify-center items-center mb-6">
            <h1 class="font-bold text-3xl">Newly Added</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 mx-auto">
            @foreach ($movies as $movie)
                <x-small-movie-card :$movie />
            @endforeach
        </div>
    </section>



    <section class="mx-auto my-20 flex flex-col items-center justify-center">
        <h1 class="font-bold text-3xl mb-8">Hollywood Persons</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8 px-4">
            @foreach ($persons as $person)
                <x-person-card :$person />
            @endforeach
        </div>
    </section>


    <section
        class="my-20 flex flex-col justify-center items-center bg-white/10 p-6 pb-16 rounded-2xl shadow-xl border-white/20">
        <h1 class="font-bold text-3xl mb-8">Genres</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 p-5">
            @foreach ($genres as $genre)
                <x-genre-tag :$genre />
            @endforeach
        </div>
    </section>


</x-layout>
