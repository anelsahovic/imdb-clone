<x-layout>
    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-users-line"></i> PERSONS</x-page-title>
        </div>

        <div
            class=" flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em]  py-10 bg-white/10 rounded-2xl shadow-xl my-10 ">

            <div class="w-full text-center mb-3 border-b-2 border-white/20">
                <h2 class="text-xl font-bold ">Edit person</h2>
            </div>

            <form action="{{ route('persons.update', $person) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label for="first_name" class="block text-white font-semibold mb-2 ml-1">First name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="John"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ $person->first_name }}">
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-white font-semibold mb-2 ml-1">Last name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Doe"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ $person->last_name }}">
                    </div>
                    <div class="mb-4">
                        <label for="country" class="block text-white font-semibold mb-2 ml-1">Country</label>
                        <input type="text" id="country" name="country" placeholder="France"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ $person->country }}">
                    </div>

                    <div class="mb-4">
                        <label for="birth_date" class="block text-white font-semibold mb-2 ml-1">Date of birth</label>
                        <input type="date" id="birth_date" name="birth_date" placeholder=""
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ $person->birth_date }}">
                    </div>



                </div>
                <div class="mb-4">
                    <label for="img_url" class="block text-white font-semibold mb-2 ml-1">Img Url</label>
                    <input type="text" id="img_url" name="img_url" placeholder="https:/imageurl.com"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required value="{{ $person->img_url }}">
                </div>
                <div class="mb-4">
                    <label for="biography" class="block text-white font-semibold mb-2 ml-1">Biography</label>
                    <textarea name="biography" id="biography"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required ">{{ $person->biography }}</textarea>
                </div>
                <div class="text-center my-2">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>

                <div class="flex justify-evenly items-center">

                    <div class="mb-4">
                        <label for="role" class="block text-white font-semibold mb-2">Select Role</label>
                        <select id="role" name="role"
                            class="w-full px-3 py-2 border rounded-lg text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300">
                            @if ($person->role === 'Actor')
                                <option value="Actor"selected>Actor</option>
                                <option value="Director">Director</option>
                            @endif

                            @if ($person->role === 'Director')
                                <option value="Actor">Actor</option>
                                <option value="Director"selected>Director</option>
                            @endif

                        </select>
                    </div>





                    <div>
                        <button
                            class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-full bg-primary hover:bg-primary/50 transition-colors duration-400">
                            Save
                        </button>
                    </div>
                </div>


            </form>




        </div>

    </section>
</x-layout>
