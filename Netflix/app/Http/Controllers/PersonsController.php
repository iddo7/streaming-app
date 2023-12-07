<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Http\Requests\PersonRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        $males = Person::where('gender', 'male')->get();
        $females = Person::where('gender', 'female')->get();
        $peopleBornInChicago = Person::where('placeOfBirth', 'Chicago')->get();
        $peopleBornBefore1990 = Person::whereYear('birthday', '<', 1990)->get();
        $mainlyActors = Person::where('mainRole', 'actor')->get();
        $mainlyProducers = Person::where('mainRole', 'producer')->get();


        return View('Persons.index', compact('persons', 'males', 'females', 'peopleBornInChicago', 'peopleBornBefore1990', 'mainlyActors', 'mainlyProducers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        try {
            $person = new Person($request->all());

            $uploadedFile = $request->file('pictureUrl');
            $uniqueFileName = str_replace(' ', '_', $person->name) . '-' . uniqid() . '.' . $uploadedFile->extension();
            try {
                $request->pictureUrl->move(public_path('img/people'), $uniqueFileName);
            }
            catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Error while uploading the file. " [$e]);
            }

            $person->pictureUrl = "img/people/" . $uniqueFileName;
            $person->save();

            return redirect()->route('persons.index')->with('message', "Actor added successfully!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('persons.index')->withErrors(["Error wile adding the person"]);
        }
        return redirect()->route('persons.index');
    }

    /**
     * Display the specified resource.
     * 
     */
    public function show(Person $person)
    {
        return View('Persons.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return View('persons.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $uploadedFile = $request->file('pictureUrl');
        $uniqueFileName = str_replace(' ', '_', $person->name) . '-' . uniqid() . '.' . $uploadedFile->extension();

        // Delete the image
        try {
            if(\File::exists(public_path($person->pictureUrl)))
            {
                File::delete(public_path($person->pictureUrl));
            }
        }
        catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
        {
            Log::error("Error while deleting the file. " [$e]);
        }

        try {
            try {
                $request->pictureUrl->move(public_path('img/people'), $uniqueFileName);
            }
            catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Error while uploading the file. " [$e]);
            }

            
            $person->update($request->all());
            $person->pictureUrl = "img/people/" . $uniqueFileName;
            $person->save();

            return redirect()->route('persons.index')->with('message', "Editing " . $person->name . " was successful!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('persons.index')->with('message', "Editing " . $person->name . " was not successful!");
        }
        return redirect()->route('persons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $person = Person::findOrFail($id);

            /* - Checking if the person is director or producer of a movie - */
            $numberOfDirectedMovies = count($person->moviesDirected);
            $numberOfProducedMovies = count($person->moviesProduced);
            if ($numberOfDirectedMovies > 0) {
                $errorMessage = "Cannot delete " . $person->name . " because they direct " . $numberOfDirectedMovies . " movie(s)";
                return redirect()->route('persons.show', [$person])->withErrors($errorMessage);
            }
            if ($numberOfProducedMovies > 0) {
                $errorMessage = "Cannot delete " . $person->name . " because they direct " . $numberOfProducedMovies . " movie(s)";
                return redirect()->route('persons.show', [$person])->withErrors($errorMessage);
            }
            
            try {
                if(\File::exists(public_path($person->pictureUrl)))
                {
                    File::delete(public_path($person->pictureUrl));
                }
            }
            catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e)
            {
                Log::error("Error while deleting the file. " [$e]);
            }

            // If a person has a movie, detach it
            $person->movies()->detach();
            $person->delete();
            return redirect()->route('persons.index')->with('message', "Deleting " . $person->name . " was successful!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('persons.index')->withErrors("Deleting " . $person->name . " was not successful!");
        }
        return redirect()->route('persons.index');
    }
}
