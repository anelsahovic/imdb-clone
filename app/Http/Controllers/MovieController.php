<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $selectedGenre = $request->input('genre');


        $genres = Genre::all();


        $movies = Movie::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->when($selectedGenre, function ($query, $selectedGenre) {
                return $query->whereHas('genres', function ($q) use ($selectedGenre) {
                    $q->where('genres.id', $selectedGenre);
                });
            })
            ->paginate(10);
        return view('movies.index', compact('movies', 'genres'));
    }

    public function getFavorites()
    {
        $movies = Auth::user()->favorites()->latest()->paginate(perPage: 9);
        //dd($movies);
        return view('movies.favorites', compact('movies'));
    }

    public function storeFavorite(Movie $movie)
    {

        $alreadyFavorited = Auth::user()->favorites()->where('movie_id', $movie->id)->exists();
        if (!$alreadyFavorited) {

            Auth::user()->favorites()->attach($movie);
        }

        return redirect()->route('movies.show', $movie);
    }

    public function destroyFavorite(Movie $movie)
    {
        Auth::user()->favorites()->detach($movie);

        return redirect()->route('movies.show', $movie);
    }

    public function create()
    {
        $genres = Genre::all();
        $tags = Tag::all();
        $actors = Person::actors()->get();

        return view('movies.create', compact('genres', 'tags', 'actors'));
    }

    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'title' => 'required|max:50',
            'year_published' => 'required',
            'rating' => 'required|numeric|between:0,10|regex:/^\d+(\.\d{1})?$/',
            'director_id' => 'required',
            'img_url' => 'required',
            'description' => 'required',

        ]);

        $att = request()->validate([
            'genres' => 'array',
            'tags' => 'array',
            'actors' => 'array'
        ]);

        // Store the movie
        $movie = Movie::create($attributes);

        // Attach genres, tags, and actors to the movie if they exist
        if (isset($att['genres'])) {
            $movie->genres()->attach($att['genres']);
        }
        if (isset($att['tags'])) {
            $movie->tags()->attach($att['tags']);
        }
        if (isset($att['actors'])) {
            $movie->actors()->attach($att['actors']);
        }

        // Redirect to the newly created movie page
        return redirect()->route('movies.show', $movie);
    }



    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        // Fetch genres, tags, and actors for the dropdowns
        $genres = Genre::all();
        $tags = Tag::all();
        $actors = Person::where('role', 'Actor')->get(); // Assuming 'role' is a field in the Person model
        $directors = Person::where('role', 'Director')->get();
        // Get the currently associated genres, tags, and actors
        $selectedGenres = $movie->genres->pluck('id')->toArray();
        $selectedTags = $movie->tags->pluck('id')->toArray();
        $selectedActors = $movie->actors->pluck('id')->toArray();

        return view('movies.edit', compact('movie', 'genres', 'tags', 'actors', 'directors', 'selectedGenres', 'selectedTags', 'selectedActors'));
    }

    public function update(Movie $movie)
    {
        // Validate the request
        $attributes = request()->validate([
            'title' => 'required|max:50',
            'year_published' => 'required',
            'rating' => 'required|numeric|between:0,10|regex:/^\d+(\.\d{1})?$/',
            'director_id' => 'required',
            'img_url' => 'required',
            'description' => 'required',

        ]);

        $att = request()->validate([
            'genres' => 'array',
            'tags' => 'array',
            'actors' => 'array'
        ]);
        // Update the movie
        $movie->update($attributes);

        // Sync genres, tags, and actors to the movie
        $movie->genres()->sync($att['genres'] ?? []);
        $movie->tags()->sync($att['tags'] ?? []);
        $movie->actors()->sync($att['actors'] ?? []);

        // Redirect to the updated movie page
        return redirect()->route('movies.show', $movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
