<x-layout>

    <section class="flex flex-col items-center">
        <div>
            <x-page-title><i class="fa-solid fa-users-line"></i> PERSONS</x-page-title>
        </div>

        <div class="w-full px-4 py-10 bg-white/10 rounded-2xl shadow-xl my-10 max-w-full lg:max-w-4xl">
            <h2 class="text-xl font-bold text-center border-b-2 border-white/20 mb-6">Persons List</h2>


            <div class="overflow-x-auto">
                <table class="table-auto w-full text-center text-white">
                    <thead class="bg-gray-800">
                        <tr class="border-b-2 border-white/20">
                            <th class="px-4 py-2">First Name</th>
                            <th class="px-4 py-2">Last Name</th>
                            <th class="px-4 py-2">Birth Date</th>
                            <th class="px-4 py-2">Country</th>
                            <th class="px-4 py-2">Biography</th>
                            <th class="px-4 py-2">Image</th>
                            <th class="px-4 py-2">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($persons as $person)
                            <tr class="border-b border-gray-700 hover:bg-primary/50  cursor-pointer"
                                onclick="window.location='{{ route('persons.show', $person) }}'">
                                <td class="px-4 py-2">{{ $person->first_name }}</td>
                                <td class="px-4 py-2">{{ $person->last_name }}</td>
                                <td class="px-4 py-2">{{ $person->birth_date }}</td>
                                <td class="px-4 py-2">{{ $person->country }}</td>

                                <td class="px-4 py-2 max-w-xs truncate" title="{{ $person->biography }}">
                                    {{ Str::limit($person->biography, 20, '...') }}
                                </td>
                                <td class="px-4 py-2">
                                    <img src="{{ $person->img_url }}" alt="Person Image" class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-4 py-2">{{ $person->role }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="flex justify-between items-center space-x-5 my-8">
                <div>{{ $persons->links() }}</div>
                <div>
                    <a href="{{ route('persons.create') }}"
                        class="flex justify-center items-center gap-x-2 font-bold h-10 px-5 py-2 rounded-lg bg-gray-800 ring-1 ring-white/50 hover:ring-primary transition-colors duration-400">
                        Add New
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-layout>
