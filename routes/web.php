<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::view('/admin-dashboard', 'admin-dashboard')->name('admin-dashboard')->middleware('auth')->can('user-admin');
Route::view('/user-dashboard', 'user-dashboard')->name('user-dashboard')->middleware('auth');

// USERS
Route::controller(UserController::class)
    ->name('users.')
    ->group(function () {
        Route::get('/users', 'index')->name('index')->middleware('auth')->can('user-admin');
        Route::get('/users/create', 'create')->name('create');
        Route::post('/users/store', 'store')->name('store');
        Route::get('/users/{user}', 'show')->name('show')->middleware('auth')->can('user-admin');
        Route::get('/users/{user}/edit', 'edit')->name('edit')->middleware('auth')->can('user-admin');
        Route::get('/users/{user}/edit-profile', 'editProfile')->name('edit-profile')->middleware('auth');


        Route::patch('/users/{user}', 'update')->name('update')->middleware('auth')->can('user-admin'); // Update user details
        Route::patch('/users/{user}/profile', 'updateProfile')
            ->name('update-profile')
            ->middleware('auth')
            ->can('updateProfile', 'user'); // Update user profile specifically
    
        Route::delete('/users/{user}', 'destroy')->name('destroy');
    });

//MOVIES
Route::controller(MovieController::class)
    ->name('movies.')
    ->group(function () {
        Route::get('/movies', 'index')->name('index');
        Route::get('/movies/create', 'create')->name('create')->middleware('auth')->can('user-admin');
        Route::post('/movies/store', 'store')->name('store')->middleware('auth')->can('user-admin');
        Route::get('/movies/{movie}', 'show')->name('show');
        Route::get('/movies/{movie}/edit', 'edit')->name('edit')->middleware('auth')->can('user-admin');
        Route::patch('/movies/{movie}', 'update')->name('update')->middleware('auth')->can('user-admin');
        Route::delete('/movies/{movie}', 'destroy')->name('destroy')->middleware('auth')->can('user-admin');
    });

//PERSONS
Route::controller(PersonController::class)
    ->name('persons.')
    ->group(function () {
        Route::get('/persons', 'index')->name('index');
        Route::get('/persons/adminview', 'AdminIndex')->name('index-admin')->middleware('auth')->can('user-admin');
        Route::get('/persons/create', 'create')->name('create')->middleware('auth')->can('user-admin');
        Route::post('/persons/store', 'store')->name('store')->middleware('create')->can('user-admin');
        Route::get('/persons/{person}', 'show')->name('show')->middleware('auth');
        Route::get('/persons/{person}/edit', 'edit')->name('edit')->middleware('auth')->can('user-admin');
        Route::patch('/persons/{person}', 'update')->name('update')->middleware('auth')->can('user-admin');
        Route::delete('/persons/{person}', 'destroy')->name('destroy')->middleware('auth')->can('user-admin');
    });


//REVIEWS
Route::controller(ReviewController::class)
    ->name('reviews.')
    ->group(function () {
        Route::get('/reviews', 'index')->name('index');
        Route::get('/reviews/myreviews', 'indexUser')->name('index-user');
        Route::get('/reviews/create/{movie}', 'create')->name('create')->middleware('auth');
        Route::post('/reviews/store', 'store')->name('store')->middleware('auth');
        Route::get('/reviews/{review}', 'show')->name('show')->middleware('auth');
        Route::get('/reviews/{review}/edit', 'edit')->name('edit')->middleware('auth');
        Route::patch('/reviews/{review}', 'update')->name('update')->middleware('auth');
        Route::delete('/reviews/{review}', 'destroy')->name('destroy')->middleware('auth');
    });

//GENRES 
Route::controller(GenreController::class)
    ->name('genres.')
    ->group(function () {
        Route::get('/genres', 'index')->name('index')->middleware('auth')->can('user-admin');
        Route::get('/genres/create', 'create')->name('create')->middleware('auth')->can('user-admin');
        Route::post('/genres/store', 'store')->name('store')->middleware('auth')->can('user-admin');
        Route::get('/genres/{genre}', 'show')->name('show')->middleware('auth')->can('user-admin');
        Route::get('/genres/{genre}/edit', 'edit')->name('edit')->middleware('auth')->can('user-admin');
        Route::patch('/genres/{genre}', 'update')->name('update')->middleware('auth')->can('user-admin');
        Route::delete('/genres/{genre}', 'destroy')->name('destroy')->middleware('auth')->can('user-admin');
    });

//TAGS
Route::controller(TagController::class)
    ->name('tags.')
    ->group(function () {
        Route::get('/tags', 'index')->name('index')->middleware('auth')->can('user-admin');
        Route::get('/tags/create', 'create')->name('create')->middleware('auth')->can('user-admin');
        Route::post('/tags/store', 'store')->name('store')->middleware('auth')->can('user-admin');
        Route::get('/tags/{tag}', 'show')->name('show')->middleware('auth')->can('user-admin');
        Route::get('/tags/{tag}/edit', 'edit')->name('edit')->middleware('auth')->can('user-admin');
        Route::patch('/tags/{tag}', 'update')->name('update')->middleware('auth')->can('user-admin');
        Route::delete('/tags/{tag}', 'destroy')->name('destroy')->middleware('auth')->can('user-admin');
    });

//REGISTER
Route::get('/register', [RegisteredController::class, 'index'])->name('register.index');
Route::post('/register', [RegisteredController::class, 'store'])->name('register.store');

//LOGIN
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');

Route::delete('/logout', [SessionController::class, 'destroy'])->name('session.destroy');
