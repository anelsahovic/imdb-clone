<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required|min:2|string',
            'last_name' => 'required|min:2|string',
            'username' => 'required|min:4|unique:users,username',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'role' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($attributes);
        return redirect()->route('users.show', compact('user'));

    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function editProfile(User $user)
    {
        return view('users.edit-profile', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'first_name' => 'required|min:2|string',
            'last_name' => 'required|min:2|string',
            'username' => 'required|min:4',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'role' => 'required',
            'password' => 'required'
        ]);

        $user->update($attributes);
        return redirect()->route('users.show', compact('user'));

    }

    public function updateProfile(User $user)
    {

        if (request()->filled('password')) {
            $attributes = request()->validate([
                'first_name' => 'required|min:2|string',
                'last_name' => 'required|min:2|string',
                'username' => 'required|min:4',
                'email' => 'required|email',
                'birth_date' => 'required|date',
                'password' => 'required|confirmed'
            ]);
        } else {
            $attributes = request()->validate([
                'first_name' => 'required|min:2|string',
                'last_name' => 'required|min:2|string',
                'username' => 'required|min:4',
                'email' => 'required|email',
                'birth_date' => 'required|date',
            ]);
        }


        $oldPassword = request()->validate([
            'oldpassword' => 'required',
        ]);

        if (!Hash::check($oldPassword['oldpassword'], $user->password)) {
            throw ValidationException::withMessages(['oldpassword' => 'Old password doesn\'t match!']);
        } else {
            $user->update($attributes);
            return redirect()->route('user-dashboard', compact('user'));
        }


    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
