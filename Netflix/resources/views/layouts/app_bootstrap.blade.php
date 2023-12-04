<!DOCTYPE html>
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
  <header class="d-flex justify-content-between align-items-center">
    <div class="netflixLogo">
      <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
    </div>      
    <nav class="main-nav">                
      <a href="{{ route('movies.index') }}">Movies</a>
      <a href="{{ route('persons.index') }}">People</a>
      @role('admin')
        <a href="{{ route('users.index') }}">Users</a>
      @endrole
    </nav>
    <nav class="sub-nav d-flex align-items-center">
      <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
      <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Account
        </a>
        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
          <li><a class="dropdown-item" href="#">View Account</a></li>
          <li><a class="dropdown-item" href="{{ route('users.processLogout') }}">Logout</a></li>
        </ul>
      </div>
    </nav>      
    </nav>
  </header>
  
  <div class="container mt-5">
    @if(isset($errors) && $errors->any())
        <div class="alert alert-danger mt-5">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    @if(isset($messages) && $messages->any())
        <div class="alert alert-danger mt-5">
            @foreach($messages->all() as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif
  </div>
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
