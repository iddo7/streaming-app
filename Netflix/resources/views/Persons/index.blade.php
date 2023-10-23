@extends('layouts.app')

@section('title', 'Persons page')
@section('content')

@if (count($persons))
    @foreach($persons as $person)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="Image of {{$person->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$person->name}}</h5>
                <p class="card-text">{{$person->mainRole}}</p>
            </div>
        </div>
    @endforeach
@else
    <p>We couldn't find any persons.</p>
@endif

@endsection