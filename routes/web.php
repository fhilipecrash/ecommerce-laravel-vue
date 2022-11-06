<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('Home'))->name('home');

Route::get('/login', fn () => Inertia::render('Login'))->name('login');

Route::get('/register', fn () => Inertia::render('Register'))->name('register');

Route::get('/profile', fn () => Inertia::render('Profile'))->name('profile');

Route::get('/products', fn () => Inertia::render('Products'))->name('products');

Route::get('/support', fn () => Inertia::render('Support'))->name('support');
