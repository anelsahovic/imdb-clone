<div class="max-w-sm w-full mx-auto bg-white/10 rounded-lg shadow-lg overflow-hidden mb-6">
    <a href="{{ route('movies.show', $review->movie) }}" class="hover:opacity-60">
        <div class="relative h-32">



            <img src="{{ $review->movie->img_url }}" alt="Movie Poster" class="w-full h-full object-cover">
            <div class="absolute flex flex-col inset-0 bg-black bg-opacity-50 items-center justify-center">
                <h2 class="text-xl font-bold text-white text-center">{{ $review->movie->title }}</h2>
                <p class="text-md font-semibold text-white text-center">({{ $review->movie->year_published }})</p>
            </div>
        </div>
    </a>
    <a href="{{ route('reviews.show', $review) }}" class="hover:opacity-60">
        <div class="flex flex-col p-3 justify-between">

            <div class="flex my-3 items-center">
                <div>
                    <img src="https://www.citypng.com/public/uploads/preview/white-user-member-guest-icon-png-image-701751695037005zdurfaim0y.png"
                        alt="User Avatar" class="w-11 h-11 p-1 rounded-full border-2 border-gray-600 mr-2">
                </div>
                <div class="flex flex-col">
                    <h3 class="text-xl font-semibold text-white">{{ $review->user->first_name }}
                        {{ $review->user->last_name }}</h3>
                    <p class="text-md font-semibold text-white/50"><span
                            class="font-bold">@</span>{{ $review->user->username }}</p>
                </div>
            </div>

            <div class="my-2 w-full px-3 py-2 border-2 border-white/10 rounded-full">
                <p class="text-gray-300 text-sm h-full overflow-hidden">{{ $review->comment }}</p>
            </div>

            <div class="flex justify-between items-center space-x-5 mb-0 mt-2">
                <div class="flex  justify-center items-center text-yellow-400">
                    <span class="text-lg mr-1"><i class="fa-solid fa-star"></i></span>
                    <p class="text-lg">{{ $review->rating }} </p>
                    <p class="text-sm"> &nbsp/ 10</p>
                </div>
                <div>
                    <p class="text-gray-500 text-xs text-right">{{ $review->created_at->format('F j, Y') }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
