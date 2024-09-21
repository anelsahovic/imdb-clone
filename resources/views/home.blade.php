<x-layout>

    <section class="w-full flex flex-col justify-center items-center px-4">
        <div class="my-10">
            <h1 class="text-4xl md:text-6xl lg:text-7xl text-center">Let's watch a movie</h1>
        </div>

        <div class="mt-2 relative w-full max-w-lg">
            <input type="text"
                class="bg-white/20 rounded-full p-3 pr-10 w-full focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                placeholder="The Wolf of Wall Street...">
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
            </div>
        </div>
    </section>


    <section class="my-10">
        <a href="#" class="hover:opacity-80">
            <div class="relative w-full h-96 bg-cover bg-center"
                style="background-image: url('https://via.placeholder.com/1200x600')">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="flex flex-col items-center justify-center h-full text-white text-center">
                    <div class="text-3xl font-bold mt-2">Movie Title</div>
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
            <x-big-movie-card></x-big-movie-card>
            <x-big-movie-card></x-big-movie-card>
            <x-big-movie-card></x-big-movie-card>
        </div>
    </section>


    <section class="my-10">
        <div class="w-full flex justify-center items-center mb-6">
            <h1 class="font-bold text-3xl">Newly Added</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 mx-auto">
            <x-small-movie-card></x-small-movie-card>
            <x-small-movie-card></x-small-movie-card>
            <x-small-movie-card></x-small-movie-card>
            <x-small-movie-card></x-small-movie-card>
            <x-small-movie-card></x-small-movie-card>
            <x-small-movie-card></x-small-movie-card>
        </div>
    </section>



    <section class="mx-auto my-20 flex flex-col items-center justify-center">
        <h1 class="font-bold text-3xl mb-8">Actors</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8 px-4">
            <x-person-card></x-person-card>
            <x-person-card></x-person-card>
            <x-person-card></x-person-card>
            <x-person-card></x-person-card>
            <x-person-card></x-person-card>
        </div>
    </section>


    <section
        class="my-20 flex flex-col justify-center items-center bg-white/10 p-6 pb-16 rounded-2xl shadow-xl border-white/20">
        <h1 class="font-bold text-3xl mb-8">Genres</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 p-5">
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
            <x-genre-tag></x-genre-tag>
        </div>
    </section>


</x-layout>
