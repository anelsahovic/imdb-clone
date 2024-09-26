<x-layout>
    <div class="flex flex-col justify-center items-center my-10">


        <div
            class="flex flex-col md:flex-row bg-white/10 rounded-lg shadow-lg overflow-hidden max-w-md mx-auto my-5 hover:shadow-xl transition-shadow duration-300">

            <div class="md:w-1/3 ">
                <img src="{{ $review->movie->img_url }}" alt="{{ $review->movie->title }}"
                    class="h-auto w-full object-cover">
            </div>

            <div class="md:w-2/3 p-4 flex flex-col justify-between">

                <div class="mb-2">
                    <h2 class="text-xl font-bold text-white">{{ $review->movie->title }}</h2>
                    <div class="flex items-center mt-1 space-x-2">
                        <p class="text-md text-gray-400">({{ $review->movie->year_published }})</p>
                        <span class="text-yellow-400 text-md font-bold">
                            <i class="fa-solid fa-star"></i> {{ $review->movie->rating }}
                        </span>
                    </div>
                </div>


                <div class="mb-2">
                    <p class="text-gray-300">{{ Str::limit($review->movie->description, 60) }}</p>
                </div>


                <div class="mb-2">
                    <h4 class="text-white text-sm font-semibold">Starring:</h4>
                    <div class="flex flex-wrap space-x-1">
                        @foreach ($review->movie->actors as $actor)
                            <span class="text-xs text-gray-400">{{ $actor->first_name }} {{ $actor->last_name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col items-center px-4 max-w-md w-full py-5 bg-white/10 rounded-2xl shadow-lg mt-4">
            <div class="w-full text-center mb-4 border-b-2 border-white/20">
                <h2 class="text-xl font-bold text-white">Leave a Review</h2>
            </div>

            <form action="{{ route('reviews.update', $review) }}" method="POST" class="w-full">
                @csrf
                @method('PATCH')
                <div class="mb-4 ">
                    <label for="rating" class="block text-white font-semibold mb-2">Your Rating</label>
                    <input type="text" id="rating" name="rating" placeholder="8.5"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-white/5 border-gray-600 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required value="{{ $review->rating }}">
                </div>

                <div class="mb-4">
                    <label for="comment" class="block text-white font-semibold mb-2">Comment</label>
                    <textarea name="comment" id="comment"
                        class="w-full px-3 py-2 border rounded-xl text-gray-700 bg-white/5 border-gray-600 focus:outline-none focus:ring-4 focus:ring-primary transition duration-300"
                        required>{{ $review->comment }}</textarea>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-500">{{ $error }}</p>
                    @endforeach
                @endif
                <div class="flex justify-center">
                    <input type="hidden" name="movie_id" id="movie_id" value="{{ $review->movie->id }}">
                    <button
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-full bg-primary hover:bg-primary/50 transition-colors duration-400">
                        <i class="fa-solid fa-floppy-disk"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
