<?php

namespace App\Http\Controllers;

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

    public function create(Movie $movie)
    {

        return view('reviews.create', compact('movie'));
    }

    public function store(Request $request)
    { {
            // Validate the incoming request
            $request->validate([
                'movie_id' => 'required|exists:movies,id', // Ensure movie_id is valid
                'rating' => 'required|numeric|between:0,10|regex:/^\d+(\.\d{1})?$/',
                'comment' => 'required|string|max:500',
            ]);

            // Create a new review
            Review::create([
                'user_id' => Auth::id(), // Get the currently authenticated user ID
                'movie_id' => $request->input('movie_id'), // Movie ID from the form
                'rating' => $request->input('rating'), // Rating from the form
                'comment' => $request->input('comment'), // Comment from the form
            ]);

            // Redirect back or to another page with a success message
            return redirect()->route('reviews.index');
        }
    }

    public function show($review)
    {
    }

    public function edit($review)
    {
    }

    public function update($review)
    {
    }

    public function destroy($review)
    {
    }
}
