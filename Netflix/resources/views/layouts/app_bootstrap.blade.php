<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href='{{ asset("style/main.css") }}'>
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</head>
<body>
    <!-- HEADER -->
  <header>
    <div class="netflixLogo">
      <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
    </div>      
    <nav class="main-nav">                
      <a href="#home">Home</a>
      <a href="#tvShows">TV Shows</a>
      <a href="{{ route('movies.index') }}">Movies</a>
      <a href="{{ route('persons.index') }}">People</a>
      <a href="#">Recently Added</a>
      <a target="_blank" href="https://codepen.io/cb2307/full/NzaOrm">Portfolio</a>        
    </nav>
    <nav class="sub-nav">
      <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
      <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
      <a href="#">Account</a>        
    </nav>      
  </header>
  <!-- END OF HEADER -->

    @yield('content')

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2023 Netflix, Inc.</p>
      <p>Isaac Negreiros & Julien Fortin &copy 2023</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>