<x-layout>
    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-user-plus"></i> USERS</x-page-title>
        </div>

        <div
            class="flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em] py-10 bg-white/10 rounded-2xl shadow-xl my-10">

            <div class="w-full text-center mb-3 border-b-2 border-white/20">
                <h2 class="text-xl font-bold ">Add New User</h2>
            </div>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                    <div class="mb-4">
                        <label for="first_name" class="block text-white font-semibold mb-2 ml-1">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="John"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('first_name') }}">
                    </div>


                    <div class="mb-4">
                        <label for="last_name" class="block text-white font-semibold mb-2 ml-1">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Doe"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('last_name') }}">
                    </div>


                    <div class="mb-4">
                        <label for="username" class="block text-white font-semibold mb-2 ml-1">Username</label>
                        <input type="text" id="username" name="username" placeholder="johndoe123"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('username') }}">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-white font-semibold mb-2 ml-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('email') }}">
                    </div>


                    <div class="mb-4">
                        <label for="birth_date" class="block text-white font-semibold mb-2 ml-1">Birth Date</label>
                        <input type="date" id="birth_date" name="birth_date"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required value="{{ old('birth_date') }}">
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block text-white font-semibold mb-2">Select Role</label>
                        <select id="role" name="role"
                            class="w-full px-3 py-2 border rounded-lg text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300">
                            <option value="Admin">Admin</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>


                    <div class="mb-4">
                        <label for="password" class="block text-white font-semibold mb-2 ml-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300">
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-white font-semibold mb-2 ml-1">Confirm
                            Password</label>
                        <input type="password_confirmation" id="password_confirmation" name="password_confirmation"
                            placeholder="••••••••"
                            class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300">
                    </div>


                </div>


                <div class="text-center my-2">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        @endforeach
                    @endif
                </div>


                <div class="flex justify-center mt-4">
                    <button
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-full bg-primary hover:bg-primary/50 transition-colors duration-400">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
