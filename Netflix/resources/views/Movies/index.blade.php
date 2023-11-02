@extends('layouts.app')

@section('title', 'Movies page')


@section('content')
<div class="wrapper">
  
  <!-- MAIN CONTAINER -->
  <section class="main-container" >
    <div class="location" id="home">
        <h1 id="home">Tout les films</h1>
        <div class="box">
          @if (count($movies))
            @foreach($movies as $movie)
                      <a href="{{ route('movies.show', [$movie]) }}"><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>

        <h1 id="home">Vieux films</h1>
        <div class="box">
          @if (count($movieBefore2010))
            @foreach($movieBefore2010 as $movie)
                      <a href=""><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>

        <h1 id="home">Films récent</h1>
        <div class="box">
          @if (count($movieRecent))
            @foreach($movieRecent as $movie)
                      <a href=""><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>

        <h1 id="home">Films bien cotés</h1>
        <div class="box">
          @if (count($movieGoodRating))
            @foreach($movieGoodRating as $movie)
                      <a href=""><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>

        <h1 id="home">Films moins bien cotés</h1>
        <div class="box">
          @if (count($movieLowerRating))
            @foreach($movieLowerRating as $movie)
                      <a href=""><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>

        <h1 id="home">Films plus long</h1>
        <div class="box">
          @if (count($movieLongDuration))
            @foreach($movieLongDuration as $movie)
                      <a href=""><img src="{{$movie->cover}}" alt=""></a>
            @endforeach
          @else
                <p>We couldn't find any movies.</p>
          @endif               
        </div>
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