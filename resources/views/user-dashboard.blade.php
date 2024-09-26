<x-layout>
    <section class="flex flex-col items-center">
        <x-page-title>
            <i class="fa-solid fa-user"></i> My Profile
        </x-page-title>

        <div class="flex flex-col items-center px-6 py-8 max-w-sm w-full bg-white/10 rounded-2xl shadow-lg my-10">
            <!-- User's Avatar -->
            <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-primary mb-4">
                <img src="https://www.citypng.com/public/uploads/preview/white-user-member-guest-icon-png-image-701751695037005zdurfaim0y.png"
                    alt="User Avatar" class="w-full h-full object-cover">
            </div>

            <!-- User's Name -->
            <h3 class="text-2xl font-semibold text-white mb-1">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </h3>

            <!-- User's Username -->
            <p class="text-sm text-gray-400 mb-4">
                <span>@</span>{{ Auth::user()->username }}
            </p>

            <a href="{{ route('reviews.index-user') }}"
                class="px-4 py-2 mb-6 text-white  border border-primary rounded-lg hover:bg-primary/70 transition duration-300">
                My Reviews
            </a>

            <!-- Edit Profile Button -->
            <a href="{{ route('users.edit-profile', Auth::user()) }}"
                class="px-4 py-2 mb-6 text-white  border border-primary rounded-lg hover:bg-primary/70 transition duration-300">
                Edit Profile
            </a>

            <!-- Log Out Button -->
            <form action="{{ route('session.destroy') }}" method="POST" class="w-full text-center">
                @csrf
                @method('DELETE')
                <button
                    class="w-full px-4 py-2 text-white bg-red-600 border border-red-600 rounded-lg hover:bg-red-500 transition duration-300">
                    Log Out <i class="fa-solid fa-right-from-bracket ml-2"></i>
                </button>
            </form>
        </div>
    </section>
</x-layout>
