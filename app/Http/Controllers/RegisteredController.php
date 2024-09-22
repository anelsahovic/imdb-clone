<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {

        //validate
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'birth_date' => 'required',
            'password' => 'required|confirmed|min:8',

        ]);

        //create the user
        $user = User::create($attributes);

        //login
        Auth::login($user);

        //redirect
        return redirect()->route('movies.index');
    }

}
