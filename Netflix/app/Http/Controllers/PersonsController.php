<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Movie;

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
    public function store(Request $request)
    {
        //
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
