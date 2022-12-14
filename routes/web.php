<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home')->name('home');
Route::inertia('/login', 'Login')->name('login');
Route::inertia('/register', 'Register')->name('register');
Route::inertia('/profile', 'Profile')->name('profile');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('', fn () => Inertia::render('Dashboard', [
        'user' => auth()->user(),
    ]))->name('dashboard');
    Route::inertia('/products', 'Products')->name('products');
    Route::inertia('/support', 'Support')->name('support');
    Route::get('/users', fn () => Inertia::render('Profile', [
        'user' => auth()->user(),
    ]))->name('profile.updated');
});
