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
    return Inertia::render('Index');
});

Route::prefix('admin')->middleware(['auth', 'admin'])
->group(function () {

    Route::prefix('manage')->group(function() {
        Route::get('threads', 'ThreadsController@index')->name('threads.index');
        Route::get('posts', 'PostsController@index')->name('posts.index');
    
    });

    Route::get('Dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');
              
    Route::get('Profile', function () {
        return Inertia::render('Admin/Profile');
    })->name('Profile');    
  
    Route::get('Settings', function () {
        return Inertia::render('Admin/Settings');
    })->name('Settings');    

    Route::get('Tables', function () {
        return Inertia::render('Admin/Tables');
    })->name('Tables');    
});

require __DIR__.'/auth.php';
