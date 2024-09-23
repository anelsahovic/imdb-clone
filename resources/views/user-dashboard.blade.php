<x-layout>
    <x-page-title><i class="fa-solid fa-user"></i> My Dashboard</x-page-title>

    <div class=" flex flex-col items-center my-10">
        <form action="{{ route('session.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                class="px-3 py-2 border-2 border-red-600 rounded-lg hover:bg-red-600 transition-colors transition-duration-400">Log
                out &nbsp<i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </div>


</x-layout>
