<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredController;

Route::get('/', function () {
    return view('home');
});

//MOVIES
Route::controller(MovieController::class)
    ->name('movies.')
    ->group(function () {
        Route::get('/movies', 'index')->name('index');
        Route::get('/movies/create', 'create')->name('create');
        Route::post('/movies/store', 'store')->name('store');
        Route::get('/movies/{movie}', 'show')->name('show');
        Route::get('/movies/{movie}/edit', 'edit')->name('edit');
        Route::patch('/movies/{movie}', 'update')->name('update');
        Route::delete('/movies/{movie}', 'destroy')->name('destroy');
    });

//PERSONS
Route::controller(PersonController::class)
    ->name('persons.')
    ->group(function () {
        Route::get('/persons', 'index')->name('index');
        Route::get('/persons/create', 'create')->name('create');
        Route::post('/persons/store', 'store')->name('store');
        Route::get('/persons/{person}', 'show')->name('show');
        Route::get('/persons/{person}/edit', 'edit')->name('edit');
        Route::patch('/persons/{person}', 'update')->name('update');
        Route::delete('/persons/{person}', 'destroy')->name('destroy');
    });


//REVIEWS
Route::controller(ReviewController::class)
    ->name('reviews.')
    ->group(function () {
        Route::get('/reviews', 'index')->name('index');
        Route::get('/reviews/create', 'create')->name('create');
        Route::post('/reviews/store', 'store')->name('store');
        Route::get('/reviews/{review}', 'show')->name('show');
        Route::get('/reviews/{review}/edit', 'edit')->name('edit');
        Route::patch('/reviews/{review}', 'update')->name('update');
        Route::delete('/reviews/{review}', 'destroy')->name('destroy');
    });

//GENRES
Route::controller(GenreController::class)
    ->name('genres.')
    ->group(function () {
        Route::get('/genres', 'index')->name('index');
        Route::get('/genres/create', 'create')->name('create');
        Route::post('/genres/store', 'store')->name('store');
        Route::get('/genres/{genre}', 'show')->name('show');
        Route::get('/genres/{genre}/edit', 'edit')->name('edit');
        Route::patch('/genres/{genre}', 'update')->name('update');
        Route::delete('/genres/{genre}', 'destroy')->name('destroy');
    });

//TAGS
Route::controller(TagController::class)
    ->name('tags.')
    ->group(function () {
        Route::get('/tags', 'index')->name('index');
        Route::get('/tags/create', 'create')->name('create');
        Route::post('/tags/store', 'store')->name('store');
        Route::get('/tags/{tag}', 'show')->name('show');
        Route::get('/tags/{tag}/edit', 'edit')->name('edit');
        Route::patch('/tags/{tag}', 'update')->name('update');
        Route::delete('/tags/{tag}', 'destroy')->name('destroy');
    });

//REGISTER
Route::get('/register', [RegisteredController::class, 'index'])->name('register.index');
Route::post('/register', [RegisteredController::class, 'store'])->name('store');

//LOGIN
Route::get('/login', [SessionController::class, 'index'])->name('session.index');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::delete('/logout', [SessionController::class, 'destroy'])->name('session.destroy');
