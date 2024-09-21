<x-layout>
    <div class="min-h-screen flex items-center justify-center my-10">
        <div class="bg-white/10 shadow-lg rounded-lg p-8 w-full max-w-md">
            <!-- Logo or Title -->
            <div class="text-center mb-3">
                <h2 class="text-2xl font-bold text-white mb-2">Login</h2>
                <p class="text-gray-600">Please login to your account</p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('session.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-white font-semibold mb-2 ml-1">Username</label>
                    <input type="username" id="username" name="username" placeholder="Enter your username"
                        class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>
                </div>


                <div class="mb-10">
                    <label for="password" class="block text-white font-semibold mb-2 ml-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="w-full p-3 border rounded-full text-gray-700 bg-gray-50 border-gray-300 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>
                </div>


                <div class="w-full flex justify-center">
                    <button
                        class="w-2/3  bg-primary text-white py-3 rounded-md font-semibold hover:shadow-xl hover:bg-primary/60 transition duration-300">
                        Login
                    </button>
                </div>



                <div class="text-center mt-4">
                    <x-navlink href="#">Forgot Password?</x-navlink>
                </div>
            </form>


            <div class="my-6 border-t border-gray-300"></div>


            <div class="text-center sm:flex sm:justify-center sm:space-x-2">
                <p class="text-gray-600">Don't have an account? </p>
                <a href="{{ route('register.index') }}"
                    class="text-primary font-semibold hover:border-dotted hover:border-b-2 border-primary transition-all transition-duration:400">Register
                    here</a>
            </div>
        </div>
    </div>

</x-layout>
