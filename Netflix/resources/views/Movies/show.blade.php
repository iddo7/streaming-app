@extends('layouts.app_bootstrap')



@section('title', 'Show movie')
@section('content')

<div class="wrapper">

  <!-- MAIN CONTAINER -->
  <section class="main-container" >
    <div class="container-fluid">
        <div class="row hero-row">
        <div class="col-12 hero" style="background-image: url('{{ asset("{$movie->cover}") }}');">
        </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="p-0">{{$movie->title}}</h1>
            </div>
        </div>
        @role('admin')
            <div class="d-flex flex-row mb-3">
                <a href="{{ route('movies.edit', [$movie]) }}" class="me-2 btn btn-outline-light btn-lg">Edit</a>
                <form method="post" action="{{ route('movies.destroy', [$movie->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-lg">Delete</button>
                </form>
            </div>            
        @endrole
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

    <?php 
        $director = $movie->director;
        $producer = $movie->producer;
        $persons = $movie->persons;
    ?>
    <h1 id="tvShows">Director</h1>
    <div class="box">
        @if ($director != null)
            <a href="{{ route('persons.show', [$director]) }}"><img src="{{asset("$director->pictureUrl")}}" alt=""></a>
        @endif
    </div>

    <h1 id="tvShows">Producer</h1>
    <div class="box">
        @if ($producer != null)
            <a href="{{ route('persons.show', [$producer]) }}"><img src="{{asset("$producer->pictureUrl")}}" alt=""></a>
        @endif
    </div>

    <h1 id="tvShows">Actors that participated in this movie</h1>
    <div class="d-flex flex-row">
        @if (count($persons))
            @foreach($persons as $person)
                <div class="me-3">
                    <a href="{{ route('persons.show', [$person]) }}"><img src="{{asset("$person->pictureUrl")}}" alt=""></a>
                    @role('admin')
                        <div class="row mt-2 p-2">
                            <a href="{{ route('movies.detach', [$movie, $person]) }}" type="submit" class="btn btn-outline-danger btn-lg">Detach</a> 
                        </div>
                    @endrole
                </div> 
            @endforeach
        @else
            <p>We couldn't find any actors.</p>
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