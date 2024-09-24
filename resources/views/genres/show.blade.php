<x-layout>

    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-font-awesome"></i> GENRES</x-page-title>
        </div>

        <div
            class=" flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em]  py-10 bg-white/10 rounded-2xl shadow-xl my-10 ">



            <div class="w-full text-center border-b-2 border-white/20">
                <h2 class="text-xl font-bold ">Genre : {{ $genre->id }}</h2>
            </div>

            <div class="flex flex-col justify-between items-center gap-x-6 mt-3">

                <div class="mb-4">
                    <h1>{{ $genre->name }}</h1>
                </div>
                <div class="flex items-center space-x-3">
                    <form action="{{ route('genres.destroy', $genre) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg border-2 border-white/50 hover:border-red-600 hover:text-red-600 transition-colors duration-400">
                            <i class="fa-solid fa-trash-can"></i> Delete</i>
                        </button>
                    </form>
                    <a href="{{ route('genres.edit', $genre) }}"
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-primary hover:bg-primary/50 transition-colors duration-400"><i
                            class="fa-solid fa-pen"></i> Edit</a>

                </div>
            </div>


        </div>



    </section>


</x-layout>
