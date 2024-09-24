<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::simplePaginate(10);
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
        ]);
        $tag = Tag::create($attributes);
        return redirect()->route('tags.show', $tag);
    }

    public function show(Tag $tag)
    {

        return view('tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {

        return view('tags.edit', compact('tag'));
    }

    public function update(Tag $tag)
    {
        request()->validate([
            'name' => 'required',
        ]);

        $tag->update([
            'name' => request('name'),
        ]);

        return redirect()->route('tags.show', $tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }

}
