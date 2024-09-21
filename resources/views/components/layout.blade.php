<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMDB clone</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-black text-white">

    <nav
        class="flex justify-between items-center px-5 py-3 bg-white/10 font-semibold border-b-2 border-white/5 relative">
        <div class="w-20">
            <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"></a>
        </div>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex space-x-3">
            <x-navlink href="/">Home</x-navlink>
            <x-navlink href="{{ route('movies.index') }}">Movies</x-navlink>
            <x-navlink href="{{ route('persons.index') }}">Actors & Directors</x-navlink>
            <x-navlink href="{{ route('reviews.index') }}">Reviews</x-navlink>
        </div>

        <!-- Desktop Login/Register -->
        <div class="hidden md:flex space-x-3">
            @auth
                <x-navlink href="{{ route('session.destroy') }}">Log out</x-navlink>
            @endauth

            @guest
                <x-navlink href="{{ route('session.index') }}">Log in</x-navlink>
                <x-navlink href="{{ route('register.index') }}">Register</x-navlink>
            @endguest
        </div>

        <!-- Mobile Menu Icon -->
        <div class="md:hidden cursor-pointer" id="mobile-menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobile-menu"
            class="fixed inset-y-0 right-0 bg-black shadow-xl border-1 border-white/50 text-white w-64 transform translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
            <div class="flex justify-between items-center p-4 border-b border-white/20">
                <div class="w-20">
                    <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"></a>
                </div>
                <div class="cursor-pointer" id="close-menu">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="flex flex-col p-4 space-y-4 text-center">
                <x-navlink href="/">Home</x-navlink>
                <x-navlink href="{{ route('movies.index') }}">Movies</x-navlink>
                <x-navlink href="{{ route('persons.index') }}">Actors & Directors</x-navlink>
                <x-navlink href="{{ route('reviews.index') }}">Reviews</x-navlink>
            </div>
            <div class=" mt-4 space-x-3 space-y-2 p-4 border-t border-white/20">
                @auth
                    <x-navlink href="{{ route('session.destroy') }}">Log out</x-navlink>
                @endauth

                @guest
                    <div class="flex justify-center items-center space-x-3">
                        <x-navlink href="{{ route('session.index') }}">Log in</x-navlink>
                        <x-navlink href="{{ route('register.index') }}">Register</x-navlink>
                    </div>
                @endguest
            </div>
        </div>
    </nav>



    <main class="max-w-[986px] m-auto">
        {{ $slot }}
    </main>

    <x-footer></x-footer>

</body>

</html>
