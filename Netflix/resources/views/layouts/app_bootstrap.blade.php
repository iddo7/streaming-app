<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style/main.css') }}">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- HEADER -->
  <header class="d-flex justify-content-between align-items-center">
    <div class="netflixLogo">
      <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
    </div>      
    <nav class="main-nav">                
      <a href="#home">Home</a>
      <a href="#tvShows">TV Shows</a>
      <a href="{{ route('movies.index') }}">Movies</a>
      <a href="{{ route('persons.index') }}">People</a>
      <a href="#">Recently Added</a>
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
  </header>

  <!-- Your existing content -->

  <div class="container mt-5">
    @if(isset($errors) && $errors->any())
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: fixed; right: 2%; bottom: 2%; z-index: 1030;">
        <div class="toast-header">
          <strong class="mr-auto">Error </strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      </div>
    </div>
    @endif

    @if(session('message'))
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: fixed; right: 2%; bottom: 2%; z-index: 1030;">
        <div class="toast-header">
            <strong class="mr-auto">Message</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <p>{{ session('message') }}</p>
        </div>
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

  <!-- Bootstrap JS and Your Other Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>

  <!-- Initialize Toasts -->
  <script>
    $(document).ready(function(){
      $('.toast').toast('show');
    });
  </script>
</body>
</html>
