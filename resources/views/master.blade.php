<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->

</head>

<body>
  <nav class="nav navbar navbar-expand-sm navbar-light">
    <div class="container">
      <a href="#" class="navbar-brand">
        <h3>Exhibit</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          @guest
          <li class="nav-item">
            <a href="login" class="nav-link">Sign In</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a href="home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="artist" class="nav-link"><i class="fas fa-user"></i> Profile</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">Sign Out</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/owl.js"></script>




</body>

<div class="container-fluid mt-5">
  <footer class="footer fixed-bottom">
      <div class="text-center py-4 bg-secondary">
        <span class="text-white">Copyright 	&copy; Exhibit 2018</span>
      </div>
    </footer>
</div>



</html>
