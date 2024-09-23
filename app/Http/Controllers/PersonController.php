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

    public function create()
    {

    }

    public function store()
    {
    }

    public function show($person)
    {
    }

    public function edit($person)
    {
    }

    public function update($person)
    {
    }

    public function destroy($person)
    {
    }
}
