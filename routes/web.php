<?php

use Illuminate\Foundation\Application;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login', function() {
    return Inertia::render('auth/Login');
})->middleware(['guest'])->name('login');

Route::post('/logout', 'Auth\AuthenticateSessionController@destroy')
->middleware(['auth', 'verified'])->name('logout');

Route::get('/register', function() {
    return Inertia::render('auth/Register');
})->middleware(['guest'])->name('register');

Route::get('/dashboard', function () {
    return Inertia::render('admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

