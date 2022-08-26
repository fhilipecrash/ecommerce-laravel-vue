<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Register');
    }

    public function indexLogin()
    {
        return Inertia::render('Dashboard', [
            'user' => auth()->user(),
        ]);
    }

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
        ]);

        try {
            $user = User::where('email', $request->email)->first();
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user);
                return Redirect::route('dashboard');
            }
        } catch (\Exception $e) {
            return Redirect::route('login')->with(
                'error',
                'Invalid credentials'
            );
        }
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

    public function profileUpdated()
    {
        return Inertia::render('Profile', [
            'user' => auth()->user(),
        ]);
    }
}
