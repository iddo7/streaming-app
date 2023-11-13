@extends('layouts.app_bootstrap')

@section('title', 'Show person')
@section('content')

<div class="wrapper">

  <!-- MAIN CONTAINER -->
  <section class="main-container" >
    <div class="container-fluid">
        <div class="row hero-row">
            <div class="col-12 hero" style="background-image: url('{{$person->pictureUrl}}');">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="p-0">{{$person->name}}</h1>
            </div>
            <div class="col-2 d-grid gap-2 d-flex align-items-center">
                <a href="{{ route('persons.edit', [$person]) }}" class="btn btn-outline-light btn-lg">Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Gender: {{$person->gender}}</li>
                    <li class="list-group-item">Birthday: {{$person->birthday}}</li>
                    <li class="list-group-item">Place of birth: {{$person->placeOfBirth}}</li>
                    <li class="list-group-item">Main Role: {{$person->mainRole}}</li>
                </ul>
            

            </div>
        </div>
    </div>

    <h1 id="tvShows">Movies {{$person->name}} participated in</h1>
    <div class="box">
        <?php $movies = $person->movies ?>
        @if (count($movies))
            @foreach($movies as $movie)
                <a href=""><img src="{{asset("images/$movie->cover")}}" alt=""></a>
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