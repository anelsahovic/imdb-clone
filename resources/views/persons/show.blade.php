<x-layout>

    <section class="flex justify-center my-10">
        <div class="max-w-lg w-full bg-white/10 p-8 rounded-2xl shadow-xl text-white">


            <div class="flex justify-between items-center border-b-2 border-white/20 pb-4 mb-4">
                <h2 class="text-2xl font-bold">{{ $person->id }}: {{ $person->first_name }} {{ $person->last_name }}
                </h2>
                <span
                    class="px-3 py-1 rounded-full bg-primary text-white font-semibold">{{ ucfirst($person->role) }}</span>
            </div>


            <div class="flex justify-center mb-6">
                <img src="{{ $person->img_url }}" alt="{{ $person->first_name }}"
                    class="w-40 h-40 rounded-full border-4 border-primary object-cover">
            </div>


            <div class="space-y-4 text-sm">
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Birth Date:</span>
                    <span>{{ $person->birth_date }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Country:</span>
                    <span>{{ $person->country }}</span>
                </div>
                <div>
                    <span class="font-semibold">Biography:</span>
                    <p class="mt-2 text-sm">{{ $person->biography }}</p>
                </div>
            </div>


            <div class="flex justify-between items-center mt-6">
                <form action="{{ route('persons.destroy', $person) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg border-2 border-white/50 hover:border-red-600 hover:text-red-600 transition-colors duration-400">
                        <i class="fa-solid fa-trash-can"></i> Delete
                    </button>
                </form>
                <a href="{{ route('persons.edit', $person) }}"
                    class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-primary hover:bg-primary/50 transition-colors duration-400">
                    <i class="fa-solid fa-pen"></i> Edit
                </a>
            </div>
        </div>
    </section>

</x-layout>
