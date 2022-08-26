<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/login', fn() => Inertia::render('Login'))->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/profile', fn() => Inertia::render('Profile'))->name('profile');
Route::put('/profile', [UserController::class, 'update']);
Route::get('/profile', [UserController::class, 'profileUpdated'])->name(
    'profile.updated'
);
Route::get('/products', fn() => Inertia::render('Products'))->name('products');
Route::get('/support', fn() => Inertia::render('Support'))->name('support');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [UserController::class, 'indexLogin'])->name('dashboard');
});
