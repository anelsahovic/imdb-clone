<x-layout>
    <div class="min-h-screen flex items-center justify-center  my-10">
        <div class="bg-white/10 shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-sm sm:max-w-xl">

            <div class="text-center mb-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white mb-2">Register</h2>
                <p class="text-gray-400 sm:text-gray-600">Create a new account</p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                    <div>
                        <label for="first_name" class="block text-white font-semibold mb-2 ml-1">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>


                    <div>
                        <label for="last_name" class="block text-white font-semibold mb-2 ml-1">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label for="username" class="block text-white font-semibold mb-2 ml-1">Username</label>
                        <input type="text" id="username" name="username" placeholder="Choose a username"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>


                    <div class="mb-4">
                        <label for="email" class="block text-white font-semibold mb-2 ml-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>
                </div>




                <div class="mb-4">
                    <label for="birth_date" class="block text-white font-semibold mb-2 ml-1">Birth Date</label>
                    <input type="date" id="birth_date" name="birth_date"
                        class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label for="password" class="block text-white font-semibold mb-2 ml-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>


                    <div class="mb-10">
                        <label for="password_confirmation" class="block text-white font-semibold mb-2 ml-1">Confirm
                            Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm your password"
                            class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                            required>
                    </div>
                </div>



                <div class="w-full flex justify-center">
                    <button
                        class="w-full sm:w-2/3 bg-primary text-white py-3 rounded-md font-semibold hover:shadow-xl hover:bg-primary/60 transition duration-300">
                        Register
                    </button>
                </div>
            </form>


            <div class="my-6 border-t border-gray-300"></div>


            <div class="text-center">
                <p class="text-gray-400 sm:text-gray-600">Already have an account? <a
                        href="{{ route('session.index') }}"
                        class="text-primary font-semibold hover:border-dotted hover:border-b-2 border-primary transition-all transition-duration:400">Login
                        here</a></p>
            </div>
        </div>
    </div>
</x-layout>
