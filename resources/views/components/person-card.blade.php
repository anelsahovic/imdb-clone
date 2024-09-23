<a href="#" class="hover:opacity-80">
    <div
        class="relative mb-10 w-32 h-32 sm:w-44 sm:h-44 rounded-full overflow-hidden shadow-md bg-gray-900 flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $person->img_url }}')">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <!-- person info -->
        <div class="text-center">
            <div class="relative z-10 text-white/50 text-lg font-semibold">{{ $person->first_name }}
                {{ $person->last_name }}</div>
            <div class="relative z-10 text-white/50 text-md font-semibold">{{ $person->role }}</div>
        </div>
    </div>
</a>
