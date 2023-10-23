@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<!-- EVERYONE section -->
<section class="container mb-5 p-3">
    <div class="row">
        <h2>All the people</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-inline-flex flex-wrap">
                @if (count($persons))
                    @foreach($persons as $person)
                        <div class="card text-white bg-dark m-3" style="width: 18rem;">
                            <img src="{{$person->pictureUrl}}" class="" alt="Image of {{$person->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$person->name}}</h5>
                                <p class="card-text">{{$person->mainRole}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>We couldn't find any persons.</p>
                @endif
            </div>
        </div>
    </div>
</section>


<!-- MALES section -->
<section class="container mb-5 p-3">
    <div class="row">
        <h2>Males</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-wrap">
                @if (count($males))
                    @foreach($males as $person)
                        <div class="card text-white bg-dark m-3" style="width: 18rem;">
                            <img src="{{$person->pictureUrl}}" class="" alt="Image of {{$person->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$person->name}}</h5>
                                <p class="card-text">{{$person->mainRole}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>We couldn't find any persons.</p>
                @endif
            </div>
        </div>
    </div>
</section>


<!-- FEMALES section -->
<section class="container mb-5 p-3">
    <div class="row">
        <h2>Females</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-wrap">
                @if (count($females))
                    @foreach($females as $person)
                        <div class="card text-white bg-dark m-3" style="width: 18rem;">
                            <img src="{{$person->pictureUrl}}" class="" alt="Image of {{$person->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$person->name}}</h5>
                                <p class="card-text">{{$person->mainRole}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>We couldn't find any persons.</p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection