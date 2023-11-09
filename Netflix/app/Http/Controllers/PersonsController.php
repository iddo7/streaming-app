<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;
use App\Http\Requests\PersonRequest;
use Illuminate\Support\Facades\Log;

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
            $person->save();
        }
        catch (\Throwable $e) {
            Log::debug($e);
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
        try {
            $person->update($request->all());
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
        //
    }
}
