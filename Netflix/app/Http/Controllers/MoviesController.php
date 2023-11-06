<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Http\Requests\MoviePersonRequest;
use Illuminate\Support\Facades\Log;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $movieBefore2010 = Movie::where('annee', '<', 2010)->get();
        $movieRecent = Movie::where('annee', '>', 2009)->get();
        $movieGoodRating = Movie::where('rating', '>', 6)->get();
        $movieLowerRating = Movie::where('rating', '<', 7)->get();
        $movieLongDuration = Movie::where('duration_minutes', '>', 120)->get();

        return View('Movies.index', compact('movies', 'movieBefore2010', 'movieRecent', 'movieGoodRating', 'movieLowerRating', 'movieLongDuration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Movie $movie)
    {
        return View('Movies.create', compact('movie'));
    }

    public function createMoviePerson()
    {
        $movies = Movie::orderBy('annee')->get();
        $persons = Person::orderBy('name')->get();

        return View('MoviePerson.create', compact('movies', 'persons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function storeMoviePerson(MoviePersonRequest $request)
    {
        try 
        {
            $movie = Movie::find($request->movie_id);
            $person = Person::find($request->person_id);

            // Verifying if the relation already exists
            if ($movie->persons->contains($person))
            {
                Log::debut("This relation already exists");
                return;
            }

            $movie->persons()->attach($movie);
            $movie->save();

            return redirect()->route('movies.index');
        }
        catch(\Throwable $e) 
        {
            // Log file : Storage\Logs\Laravel.log
            Log::debug($e);
            return redirect()->route('movies.index');
        }
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return View('Movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
