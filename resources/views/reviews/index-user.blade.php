<x-layout>
    <x-page-title>My Reviews</x-page-title>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($userReviews as $review)
            <x-review-card-one :$review />
        @endforeach


    </div>

    <div class="my-3">
        {{ $userReviews->links() }}
    </div>

</x-layout>
