<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('movies', 
[MoviesController::class, 'index'])->name('movies.index')->middleware('CheckRole:admin,normal,kid');

Route::get('/movie-person/create', 
[MoviesController::class, 'createMoviePerson'])->name('movie-person.create')->middleware('CheckRole:admin');
Route::post('/movie-person/', 
[MoviesController::class, 'storeMoviePerson'])->name('movie-person.store')->middleware('CheckRole:admin');

Route::get('/movies/create', 
[MoviesController::class, 'create'])->name('movies.create')->middleware('CheckRole:admin');

Route::get('/movies/{movie}', 
[MoviesController::class, 'show'])->name('movies.show')->middleware('CheckRole:admin,normal,kid');

Route::get('persons', 
[PersonsController::class, 'index'])->name('persons.index')->middleware('CheckRole:admin,normal,kid');

Route::get('/persons/create',
[PersonsController::class, 'create'])->name('persons.create')->middleware('CheckRole:admin');
Route::post('/persons',
[PersonsController::class, 'store'])->name('persons.store')->middleware('CheckRole:admin');

Route::get('/persons/{person}', 
[PersonsController::class, 'show'])->name('persons.show')->middleware('CheckRole:admin,normal,kid');

Route::delete('/persons/{id}', 
[PersonsController::class, 'destroy'])->name('persons.destroy')->middleware('CheckRole:admin');

Route::get('/persons/{person}/edit/', 
[PersonsController::class, 'edit'])->name('persons.edit')->middleware('CheckRole:admin');
Route::patch('/persons/{person}/edit',
[PersonsController::class, 'update'])->name('persons.update')->middleware('CheckRole:admin');

Route::delete('/movies/{id}', 
[MoviesController::class, 'destroy'])->name('movies.destroy')->middleware('CheckRole:admin');

Route::get('/movies/{movie}/edit/', 
[MoviesController::class, 'edit'])->name('movies.edit')->middleware('CheckRole:admin');
Route::patch('/movies/{movie}/edit',
[MoviesController::class, 'update'])->name('movies.update')->middleware('CheckRole:admin');

Route::post('/movies',
[MoviesController::class, 'store'])->name('movies.store')->middleware('CheckRole:admin');


Route::get('/login',
[UsersController::class, 'loginPage'])->name('login');
Route::post('/processLogin',
[UsersController::class, 'login'])->name('users.processLogin');
Route::get('/processLogout',
[UsersController::class, 'logout'])->name('users.processLogout');