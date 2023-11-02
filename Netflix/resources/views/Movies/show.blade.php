@extends('layouts.app_bootstrap')

@section('title', 'Show movie')
@section('content')

<div class="wrapper">

  <!-- MAIN CONTAINER -->
  <section class="main-container" >
    <div class="container-fluid">
        <div class="row hero-row">
            <div class="col-12 hero" style="background-image: url('{{$movie->cover}}');">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="p-0">{{$movie->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">summary: {{$movie->summary}}</li>
                    <li class="list-group-item">Durée: {{$movie->duration_minutes}}</li>
                    <li class="list-group-item">Année de sorti: {{$movie->annee}}</li>
                    <li class="list-group-item">Rating: {{$movie->rating}}</li>
                </ul>
            </div>
        </div>
    </div>

    <h1 id="tvShows">Actors that participated in this movie</h1>
    <div class="box">
        <?php $persons = $movie->persons ?>
        @if (count($persons))
            @foreach($persons as $person)
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