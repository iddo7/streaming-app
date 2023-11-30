<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

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
    public function create()
    {
        $persons = Person::OrderBy('name')->get();

        return View('Movies.create', compact('persons'));
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
    public function store(MovieRequest $request)
    {

        try {    
            $movie = new Movie($request->all());

            $uploadedFile = $request->file('cover');
            $nomFichierUnique = str_replace(' ', '_', $movie->title) . '-' . uniqid() . '.' . $uploadedFile->extension(); 

            try {
                $request->cover->move(public_path('img/movies'), $nomFichierUnique);
            }

            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) 
            {
            Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $movie->cover = "img/movies/" . $nomFichierUnique;
            $movie->save();

            return redirect()->route('acteurs.index')->with('message', "Ajout de l'acteur " . $acteur->nom . " réussi!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('movies.index')->withErrors(['l\'ajout n\'a pas fonctionné']);
        }
        return redirect()->route('movies.index');

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

            $movie->persons()->attach($person);
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
    public function edit(Movie $movie)
    {
        $persons = Person::OrderBy('name')->get();

        return View('movies.edit', compact('movie'), compact('persons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        // Delete the image
        try {
            if(\File::exists(public_path($movie->cover)))
            {
                File::delete(public_path($movie->cover));
            }
        }
        catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
        {
            Log::error("Error while deleting the file. " [$e]);
        }

        try {

            try {
                $request->cover->move(public_path('img/movies'), $movie->cover);
            }
            catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Error while uploading the file. " [$e]);
            }
            
            $movie->cover = "img/movies/" . $uniqueFileName;
            $movie->update($request->all());
            $movie->save();

            return redirect()->route('movies.index')->with('message', "Editing " . $movie->title . " was successful!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('movies.index')->with('message', "Editing " . $movie->title . " was not successful!");
        }
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $movie = Movie::findOrFail($id);
            
            try {
                if(\File::exists(public_path($movie->cover)))
                {
                    File::delete(public_path($movie->cover));
                }
            }
            catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Error while deleting the file. " [$e]);
            }

            // If a person has a movie, detach it
            $movie->persons()->detach();
            $movie->delete();
            return redirect()->route('movies.index')->with('messages', "Deleting " . $movie->title . " was successful!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('movies.index')->withErrors("Deleting " . $movie->title . " was not successful!");
        }
        return redirect()->route('movies.index');
    }
}
