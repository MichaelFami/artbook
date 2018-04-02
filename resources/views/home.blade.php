@extends('master') @section('title') X-Hibit @endsection @section('content')

<!-- SECONDARY NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid mx-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Type
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Painting</a>
            <a class="dropdown-item" href="#">Photograph</a>
            <a class="dropdown-item" href="#">Mixed Media</a>
            <a class="dropdown-item" href="#">Drawing</a>
            <a class="dropdown-item" href="#">Sculpture</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Medium
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Oil</a>
            <a class="dropdown-item" href="#">Acrylic</a>
            <a class="dropdown-item" href="#">Tempura</a>
            <a class="dropdown-item" href="#">Ink</a>
            <a class="dropdown-item" href="#">Ceramic/a>
            <a class="dropdown-item" href="#">Wood</a>
            <a class="dropdown-item" href="#">Wire</a>
            <a class="dropdown-item" href="#">Plaster</a>
            <a class="dropdown-item" href="#">Marble</a>
            <a class="dropdown-item" href="#">Graphite</a>
            <a class="dropdown-item" href="#">Pen</a>
            <a class="dropdown-item" href="#">Charcoal</a>
            <a class="dropdown-item" href="#">Paper</a>
            <a class="dropdown-item" href="#">Colored Pencil</a>
            <a class="dropdown-item" href="#">Oil Pastel</a>
            <a class="dropdown-item" href="#">Soft Pastel</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Style
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Abstract</a>
            <a class="dropdown-item" href="#">Contemporary</a>
            <a class="dropdown-item" href="#">Baroque</a>
            <a class="dropdown-item" href="#">Renaissance</a>
            <a class="dropdown-item" href="#">Pointillism</a>
            <a class="dropdown-item" href="#">Expressionism</a>
            <a class="dropdown-item" href="#">Impressionism</a>
            <a class="dropdown-item" href="#">Cubism</a>
            <a class="dropdown-item" href="#">Pop Art</a>
            <a class="dropdown-item" href="#">Modernism</a>
            <a class="dropdown-item" href="#">Gothic</a>
            <a class="dropdown-item" href="#">Surrealism</a>
            <a class="dropdown-item" href="#">Realism</a>
            <a class="dropdown-item" href="#">Hyper Realism</a>
            <a class="dropdown-item" href="#">Rococo</a>
            <a class="dropdown-item" href="#">Byzantine</a>
            <a class="dropdown-item" href="#">Romanticism</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Price
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">$0 - $100</a>
            <a class="dropdown-item" href="#">$100 - $500</a>
            <a class="dropdown-item" href="#">$500 - $1000</a>
            <a class="dropdown-item" href="#">$1000 - Up</a>
          </div>
        </li>
      </ul>
      <form class="form-inline ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>

<!-- GALLERY -->
<div class="container-fluid mx-2 mt-5">
  <div class="card-columns justify-content-center">
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/230X290" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/230X290" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/242X260" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/260X290" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/275X260" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/242X260" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://via.placeholder.com/242X260" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><strong>ART TITLE</strong></h5>
      <p class="card-text">by: (Artist Name)</p>
      <p class="card-text">Type Tag goes here</p>
    </div>
    </div>
  </div>
</div>

@endsection
