<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function index()
    {
        $genres = Genre::simplePaginate(10);
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store()
    {
        $genre = request()->validate([
            'name' => 'required',
        ]);
        Genre::create($genre);
        return view('genres.show', compact('genre'));
    }

    public function show(Genre $genre)
    {

        return view('genres.show', compact('genre'));
    }

    public function edit(Genre $genre)
    {

        return view('genres.edit', compact('genre'));
    }

    public function update(Genre $genre)
    {
        $genre->update(request()->validate([
            'name' => 'required',
        ]));
        return redirect()->route('genres.show', $genre);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
