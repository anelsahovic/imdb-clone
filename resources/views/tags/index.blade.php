<x-layout>

    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-hashtag"></i> TAGS</x-page-title>
        </div>

        <div class="w-full max-w-lg mx-auto px-4 py-10 bg-white/10 rounded-2xl shadow-xl my-10">
            <h2 class="text-xl font-bold text-center border-b-2 border-white/20 mb-6">Tags List</h2>


            <div class="overflow-x-auto">
                <table class="table-auto w-full text-center text-white">
                    <thead class="bg-gray-800">
                        <tr class="border-b-2 border-white/20">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr class="border-b border-gray-700 hover:bg-primary/50 cursor-pointer"
                                onclick="window.location='{{ route('tags.show', $tag) }}'">
                                <td class="px-4 py-2">{{ $tag->id }}</td>
                                <td class="px-4 py-2">
                                    {{ $tag->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="flex justify-between items-center space-x-5 my-8">
                <div>{{ $tags->links() }}</div>
                <div>
                    <a href="{{ route('tags.create') }}"
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-gray-800 ring-1 ring-white/50 hover:ring-primary transition-colors duration-400">
                        Add New
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-layout>
