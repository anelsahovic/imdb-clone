<x-layout>

    <section class="flex justify-center my-10">
        <div class="max-w-lg w-full bg-white/10 p-8 rounded-2xl shadow-xl text-white">


            <div class="flex justify-between items-center border-b-2 border-white/20 pb-4 mb-4">
                <h2 class="text-2xl font-bold">{{ $user->first_name }} {{ $user->last_name }}</h2>
                <span
                    class="px-3 py-1 rounded-full bg-primary text-white font-semibold">{{ ucfirst($user->role) }}</span>
            </div>


            <div class="space-y-4 text-sm">
                <div class="flex justify-between items-center">
                    <span class="font-semibold">User ID:</span>
                    <span>{{ $user->id }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Username:</span>
                    <span>{{ $user->username }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Email:</span>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Birth Date:</span>
                    <span>{{ $user->birth_date }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-semibold">Account Created:</span>
                    <span>{{ $user->created_at->format('d M Y') }}</span>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg border-2 border-white/50 hover:border-red-600 hover:text-red-600 transition-colors duration-400">
                        <i class="fa-solid fa-trash-can"></i> Delete
                    </button>
                </form>
                <a href="{{ route('users.edit', $user) }}"
                    class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-primary hover:bg-primary/50 transition-colors duration-400">
                    <i class="fa-solid fa-pen"></i> Edit
                </a>
            </div>
        </div>
    </section>

</x-layout>
