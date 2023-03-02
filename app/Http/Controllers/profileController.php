<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(\App\Models\User $users)
    {
        $users = auth()->user();

        return view('profiles.show', compact('users'));
    }

    public function edit(\App\Models\User $users)
    {
        return view('profiles.edit', compact('users'));
    }

    public function store(\App\Models\User $user, Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'bio' => 'required',
        ]);

        $user = auth()->user();
        $user->name = $request->name?$request->name:$user->name;
        $user->email = $request->email?$request->email : $user->email;
        $user->first_name = $request->first_name?$request->first_name: $user->first_name;
        $user->last_name = $request->last_name?$request->last_name: $user->first_name;
        $user->bio = $request->bio?$request->bio: $user->bio;
        $user->update();

        return redirect('/profile');
    }
}
