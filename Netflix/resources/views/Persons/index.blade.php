@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="wrapper">
  

  <!-- MAIN CONTAINER -->
  <section class="main-container" >
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-2 d-grid gap-2">
                <a href="{{ route('persons.create') }}" class="btn btn-danger btn-lg">Add</a>
            </div>
            <div class="col-2 d-grid gap-2">
                <a href="{{ route('movie-person.create') }}" class="btn btn-outline-light btn-lg">Add Person to a Movie</a>
            </div>
        </div>
    </div>
    <div class="location" id="home">
        <h1 id="home">All the people</h1>
        <div class="box">
            @if (count($persons))
                @foreach($persons as $person)
                    <a href="{{ route('persons.show', [$person]) }}"><img src="{{$person->pictureUrl}}" alt=""></a>
                @endforeach
            @else
                <p>We couldn't find any persons.</p>
            @endif       
        </div>
    </div>
    
    <h1 id="tvShows">Mainly actors</h1>
    <div class="box">  
        @if (count($mainlyActors))
            @foreach($mainlyActors as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif                
    </div>
    
    <h1 id="tvShows">Mainly producers</h1>
    <div class="box">  
        @if (count($mainlyProducers))
            @foreach($mainlyProducers as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif                
    </div>
    
    <h1 id="myList">Males</h1>
    <div class="box">
        @if (count($males))
            @foreach($males as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif          
    </div>
    
    <h1 id="tvShows">Females</h1>
    <div class="box">  
        @if (count($females))
            @foreach($females as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif                
    </div>
    
    <h1 id="tvShows">People born in Chicago</h1>
    <div class="box">  
        @if (count($peopleBornInChicago))
            @foreach($peopleBornInChicago as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif                
    </div>
    
    <h1 id="tvShows">People born before 1990</h1>
    <div class="box">  
        @if (count($peopleBornBefore1990))
            @foreach($peopleBornBefore1990 as $person)
                <a href=""><img src="{{$person->pictureUrl}}" alt=""></a>
            @endforeach
        @else
            <p>We couldn't find any persons.</p>
        @endif                
    </div>
    
  <!-- END OF MAIN CONTAINER -->

  <!-- LINKS -->
  <section class="link">
    <div class="logos">
      <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
      <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
      <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
      <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
    </div>
    <div class="sub-links">
      <ul>
        <li><a href="#">Audio and Subtitles</a></li>
        <li><a href="#">Audio Description</a></li>
        <li><a href="#">Help Center</a></li>
        <li><a href="#">Gift Cards</a></li>
        <li><a href="#">Media Center</a></li>
        <li><a href="#">Investor Relations</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Legal Notices</a></li>
        <li><a href="#">Corporate Information</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </section>
  <!-- END OF LINKS -->
</div>

@endsection