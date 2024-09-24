<x-layout>

    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-book"></i> ADMIN DASHBOARD</x-page-title>
        </div>

        <div
            class=" flex flex-col items-center px-4 max-w-sm w-full sm:w-[20em] md:w-[22em] lg:w-[25em]  py-10 bg-white/10 rounded-2xl shadow-xl my-10 ">

            <div class="w-full text-center border-b-2 border-white/20">
                <h2 class="text-xl font-bold ">Navigation Menu</h2>
            </div>

            <div class="grid grid-cols-2 gap-x-6 mt-3">
                <x-admin-db-btn href="{{ route('users.index') }}"><i class="fa-solid fa-users"></i> USERS</x-admin-db-btn>
                <x-admin-db-btn href="{{ route('movies.index') }}"><i class="fa-solid fa-video"></i>
                    MOVIES</x-admin-db-btn>
                <x-admin-db-btn href="{{ route('persons.index-admin') }}"><i class="fa-solid fa-users-line"></i>
                    PERSONS</x-admin-db-btn>
                <x-admin-db-btn href="{{ route('reviews.index') }}"><i class="fa-solid fa-comment-dots"></i>
                    REVIEWS</x-admin-db-btn>
                <x-admin-db-btn href="{{ route('genres.index') }}"><i class="fa-solid fa-font-awesome"></i>
                    GENRES</x-admin-db-btn>
                <x-admin-db-btn href="{{ route('tags.index') }}"><i class="fa-solid fa-hashtag"></i>
                    TAGS</x-admin-db-btn>
            </div>


            <div class="mt-3">
                <form action="{{ route('session.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="px-3 py-2 border-2 border-red-600 rounded-lg hover:bg-red-600 transition-colors transition-duration-400">Log
                        out &nbsp<i class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            </div>
        </div>

    </section>


</x-layout>
