<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return Redirect::route('login');
    }

    public function update(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return Redirect::route('profile.updated')->with(
            'success',
            'Profile updated successfully'
        );
    }
}
