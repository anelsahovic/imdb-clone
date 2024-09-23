<x-layout>
    <h1 class="text-2xl my-8 md:text-4xl lg:text-5xl text-center">Peoples thoughts</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($reviews as $review)
            <x-review-card-one :$review />
        @endforeach


    </div>

    <div class="my-3">
        {{ $reviews->links() }}
    </div>

</x-layout>
