<footer class="bg-white/10 text-gray-400 py-8 px-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">

            <!-- Logo -->
            <div class="w-20 mb-4 md:mb-0">
                <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"></a>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-wrap justify-center space-x-3 mb-4 md:mb-0">
                <x-navlink href="/">Home</x-navlink>
                <x-navlink href="#">Movies</x-navlink>
                <x-navlink href="#">Genres</x-navlink>
                <x-navlink href="#">Actors</x-navlink>
                <x-navlink href="#">Directors</x-navlink>
                <x-navlink href="#">Reviews</x-navlink>
            </div>

            <!-- Social Media Links -->
            <div class="flex space-x-3">
                <x-navlink><i class="fa-brands fa-instagram"></i></x-navlink>
                <x-navlink><i class="fa-brands fa-facebook"></i></x-navlink>
                <x-navlink><i class="fa-brands fa-x-twitter"></i></x-navlink>
                <x-navlink><i class="fa-brands fa-youtube"></i></x-navlink>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="text-center text-sm mt-6 border-t border-gray-700 pt-4">
            &copy; 2024 IMDb Clone. All rights reserved. <x-navlink> @anelsahovic</x-navlink>
        </div>
    </div>
</footer>
