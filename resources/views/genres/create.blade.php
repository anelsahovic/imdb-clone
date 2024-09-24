<x-layout>

    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-font-awesome"></i> GENRES</x-page-title>
        </div>
        <form action="{{ route('genres.store') }}" method="POST">
            @csrf
            <div
                class=" flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em]  py-10 bg-white/10 rounded-2xl shadow-xl my-10 ">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-red-600">{{ $error }}</p>
                    @endforeach
                @endif

                <div class="w-full text-center border-b-2 border-white/20">
                    <h2 class="text-xl font-bold ">Add New Genre</h2>
                </div>

                <div class="flex flex-col justify-between items-center gap-x-6 mt-3">
                    <!-- Changed items-start to items-center -->
                    <div class="mb-4">
                        <label for="name" class="block text-white font-semibold mb-2 ml-1">Name</label>
                        <input type="text" id="name" name="name" placeholder="Action"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('name') }}">
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('genres.index') }}"
                            class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg border-2 border-white/50 hover:border-primary transition-colors duration-400"">Cancel</a>
                        <button
                            class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-primary hover:bg-primary/50 transition-colors duration-400">
                            Add <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>


            </div>
        </form>


    </section>


</x-layout>
