<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(){
        dd(request()->all());
    }

    
    public function destroy($session){
    }
}
