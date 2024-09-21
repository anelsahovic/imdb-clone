<div class="relative max-w-sm rounded-lg overflow-hidden shadow-lg bg-gray-900 hover:opacity-80">
    <!-- Movie Image as Background -->
    <div class="h-64 bg-cover bg-center" style="background-image: url('https://placehold.it/300x400')">
        <!-- Overlay for dark effect -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Top Left: Tags -->
        <div class="absolute top-2 left-2 flex space-x-1">
            <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Thriller</span>
            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Action</span>
        </div>

        <!-- Top Right: Rating -->
        <div class="absolute top-2 right-2 text-white text-sm bg-gray-800 bg-opacity-70 px-2 py-1 rounded">
            <p class="text-lg font-bold text-yellow-400"><i class="fa-solid fa-star"></i> 8.5</p>
        </div>

        <!-- Bottom Left: Director Name -->
        <div class="absolute bottom-2 left-2">
            <a href="#" class="text-white text-sm font-thin hover:underline">Isaac Newton</a>
        </div>

        <!-- Bottom Right: Genre -->
        <div class="absolute bottom-2 right-2 flex space-x-1">
            <x-tag>New</x-tag>
            <x-tag>Most viewed</x-tag>
        </div>

        <!-- Centered Title -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
            <a href="#">
                <h2 class="text-2xl font-bold">Movie Title</h2>
            </a>
            <h3 class="text-lg">(2024)</h3>
        </div>
    </div>
</div>
