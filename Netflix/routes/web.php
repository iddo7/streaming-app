<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PersonsController;

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

Route::get('pokemons', 
[PokemonsController::class, 'index'])->name('pokemons.index');

Route::get('movies', 
[MoviesController::class, 'index'])->name('movies.index');

Route::get('/movies/create', 
[MoviesController::class, 'create'])->name('movies.create');

Route::get('/movies/{movie}', 
[MoviesController::class, 'show'])->name('movies.show');

Route::get('persons', 
[PersonsController::class, 'index'])->name('persons.index');

Route::get('/persons/{person}', 
[PersonsController::class, 'show'])->name('persons.show');

