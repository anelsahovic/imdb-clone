<div class="relative max-w-sm rounded-lg overflow-hidden shadow-lg bg-gray-900 hover:opacity-80">
    <a href="#">
        <!-- Movie Image as Background -->
        <div class="h-64 bg-cover bg-center" style="background-image: url('{{ $movie->img_url }}')">
            <!-- Overlay for dark effect -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Top Left: Tags -->
            <div class="absolute top-2 left-2 flex space-x-1">
                @foreach ($movie->genres as $genre)
                    <x-tag>{{ $genre->name }}</x-tag>
                @endforeach
            </div>

            <!-- Top Right: Rating -->
            <div class="absolute top-2 right-2 text-white text-sm bg-gray-800 bg-opacity-70 px-2 py-1 rounded">
                <p class="text-lg font-bold text-yellow-400"><i class="fa-solid fa-star"></i> {{ $movie->rating }}</p>
            </div>

            <!-- Bottom Left: Director Name -->
            <div class="absolute bottom-2 left-2">
                <a href="#"
                    class="text-white text-sm font-thin hover:underline">{{ $movie->director->first_name }}
                    {{ $movie->director->last_name }}</a>
            </div>

            <!-- Bottom Right: Genre -->
            <div class="absolute bottom-2 right-2 flex space-x-1">
                @foreach ($movie->tags as $tag)
                    <x-tag>{{ $tag->name }}</x-tag>
                @endforeach
            </div>

            <!-- Centered Title -->
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
                <h2 class="text-2xl font-bold">{{ $movie->title }}</h2>
                <h3 class="text-lg">({{ $movie->year_published }})</h3>
            </div>
        </div>
    </a>
</div>
