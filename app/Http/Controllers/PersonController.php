<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::Paginate(20);
        return view('persons.index', compact('persons'));
    }
    public function adminIndex()
    {
        $persons = Person::Paginate(10);
        return view('persons.index-admin', compact('persons'));
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'country' => 'required',
            'birth_date' => 'required',
            'img_url' => 'required',
            'biography' => 'required',
        ]);

        $person = Person::create($attributes);

        return redirect()->route('persons.show', $person);
    }

    public function show(Person $person)
    {
        return view('persons.show', compact('person'));
    }

    public function edit(Person $person)
    {

        return view('persons.edit', compact('person'));
    }

    public function update(Person $person)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'birth_date' => 'required',
            'img_url' => 'required',
            'biography' => 'required',
            'role' => 'required',
        ]);
        $person->update($attributes);
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index-admin');
    }
}
