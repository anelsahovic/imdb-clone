<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::Paginate(9);
        return view('movies.index', compact('movies'));
    }

    public function create()
    {

    }

    public function store()
    {
    }

    public function show($movie)
    {
    }

    public function edit($movie)
    {
    }

    public function update($movie)
    {
    }

    public function destroy($movie)
    {
    }
}
