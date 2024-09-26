<x-layout>
    <div class="max-w-lg w-full mx-auto bg-slate-900 rounded-lg shadow-lg overflow-hidden my-6 flex">
        <!-- Movie Image -->
        <div class="w-1/3">
            <img src="{{ $review->movie->img_url }}" alt="Movie Poster"
                class="h-full w-full object-cover transition-transform duration-300 hover:scale-105">
        </div>

        <!-- Movie Info -->
        <div class="w-2/3 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold text-white">{{ $review->movie->title }}</h2>
                <p class="text-md font-semibold text-gray-400">({{ $review->movie->year_published }})</p>
                <p class="text-gray-300">Rating: {{ $review->movie->rating }}</p>
            </div>

            <!-- Review Info -->
            <div class="mt-4 p-4 bg-gray-800 rounded-lg shadow-md">
                <div class="flex items-center mb-2">
                    <img src="https://www.citypng.com/public/uploads/preview/white-user-member-guest-icon-png-image-701751695037005zdurfaim0y.png"
                        alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-gray-500 mr-2">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-semibold text-white">{{ $review->user->first_name }}
                            {{ $review->user->last_name }}</h3>
                        <p class="text-sm text-gray-400"><span class="font-bold">@</span>{{ $review->user->username }}
                        </p>
                    </div>
                </div>

                <div class="my-2 px-3 py-2 border-2 border-gray-600 rounded-lg">
                    <p class="text-gray-300 text-sm">{{ $review->comment }}</p>
                </div>

                <div class="flex items-center mt-2 text-yellow-400">
                    <span class="text-lg mr-1"><i class="fa-solid fa-star"></i></span>
                    <p class="text-lg">{{ $review->rating }} </p>
                    <p class="text-sm"> &nbsp/ 10</p>
                    <p class="text-gray-500 text-xs ml-auto">{{ $review->created_at->format('F j, Y') }}</p>
                </div>
            </div>

            <!-- Edit and Delete Buttons -->
            <div class="flex justify-between mt-4">
                @can('update', $review)
                    <a href="{{ route('reviews.edit', $review) }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                        <i class="fa-solid fa-pen"></i> Edit
                    </a>
                @endcan
                @can('delete', $review)
                    <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500">
                            <i class="fa-solid fa-trash-can"></i> Delete
                        </button>
                    </form>
                @endcan

            </div>
        </div>
    </div>
</x-layout>
