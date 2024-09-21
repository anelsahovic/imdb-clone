<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view('movies.index');
    }

    public function create(){

    }

    public function store(){
    }

    public function show($movie){
    }

    public function edit($movie){
    }

    public function update($movie){
    }
    
    public function destroy($movie){
    }
}
