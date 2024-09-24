<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'username' => 'required|min:4',
            'password' => 'required',
        ]);

        //attempt to login

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Please enter a valid username or password',
            ]);
        }

        //regenerate token
        request()->session()->regenerate();

        //redirect
        return redirect()->route('movies.index');

    }


    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
