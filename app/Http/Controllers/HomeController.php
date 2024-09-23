<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredMovies = Movie::limit(3)->where('featured', true)->get();
        $movies = Movie::limit(3)->get();
        $persons = Person::limit(value: 5)->get();
        $genres = Genre::all();
        return view('home', compact(['movies', 'featuredMovies', 'persons', 'genres']));
    }
}
