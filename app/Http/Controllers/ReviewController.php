<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->Paginate(9);
        return view('reviews.index', compact('reviews'));
    }
    public function indexUser()
    {
        $userReviews = Review::where('user_id', Auth::id())->latest()->paginate(9);

        return view('reviews.index-user', compact('userReviews'));
    }

    public function create(Movie $movie)
    {

        return view('reviews.create', compact('movie'));
    }

    public function store(Request $request)
    { {

            $request->validate([
                'movie_id' => 'required|exists:movies,id',
                'rating' => 'required|numeric|between:0,10|regex:/^\d+(\.\d{1})?$/',
                'comment' => 'required|string|max:500',
            ]);

            // Create a new review
            Review::create([
                'user_id' => Auth::id(),
                'movie_id' => $request->input('movie_id'),
                'rating' => $request->input('rating'),
                'comment' => $request->input('comment'),
            ]);


            return redirect()->route('reviews.index');
        }
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Review $review, Request $request)
    {
        $request = request()->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|numeric|between:0,10|regex:/^\d+(\.\d{1})?$/',
            'comment' => 'required|string|max:500',
        ]);

        $review->update([
            'user_id' => Auth::id(),
            'movie_id' => $request['movie_id'],
            'rating' => $request['rating'],
            'comment' => $request['comment'],
        ]);

        return redirect()->route('reviews.show', $review);
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index-user');
    }
}
