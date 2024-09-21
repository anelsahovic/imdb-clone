<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('persons.index');
    }

    public function create(){

    }

    public function store(){
    }

    public function show($person){
    }

    public function edit($person){
    }

    public function update($person){
    }
    
    public function destroy($person){
    }
}
