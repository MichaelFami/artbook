@extends('master') @section('title') Exhibit @endsection @section('content')

<!-- SECONDARY NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?type=landscape">Landscape</a>
                        <a class="dropdown-item" href="?type=painting">Painting</a>
                        <a class="dropdown-item" href="?type=photograph">Photograph</a>
                        <a class="dropdown-item" href="?type=mixedmedia">Mixed Media</a>
                        <a class="dropdown-item" href="?type=drawing">Drawing</a>
                        <a class="dropdown-item" href="?type=sculpture">Sculpture</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Medium
            </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?medium=oil">Oil</a>
                        <a class="dropdown-item" href="?medium=acrylic">Acrylic</a>
                        <a class="dropdown-item" href="?medium=tempura">Tempura</a>
                        <a class="dropdown-item" href="?medium=ink">Ink</a>
                        <a class="dropdown-item" href="?medium=ceramic">Ceramic/a>
                        <a class="dropdown-item" href="?medium=wood">Wood</a>
                        <a class="dropdown-item" href="?medium=wire">Wire</a>
                        <a class="dropdown-item" href="?medium=plaster">Plaster</a>
                        <a class="dropdown-item" href="?medium=marble">Marble</a>
                        <a class="dropdown-item" href="?medium=graphite">Graphite</a>
                        <a class="dropdown-item" href="?medium=pen">Pen</a>
                        <a class="dropdown-item" href="?medium=charcoal">Charcoal</a>
                        <a class="dropdown-item" href="?medium=paper">Paper</a>
                        <a class="dropdown-item" href="?medium=coloredpencil">Colored Pencil</a>
                        <a class="dropdown-item" href="?medium=oilpastel">Oil Pastel</a>
                        <a class="dropdown-item" href="?medium=softpastel">Soft Pastel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Style
            </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?style=abstract">Abstract</a>
                        <a class="dropdown-item" href="?style=contemporary">Contemporary</a>
                        <a class="dropdown-item" href="?style=baroque">Baroque</a>
                        <a class="dropdown-item" href="?style=renaissance">Renaissance</a>
                        <a class="dropdown-item" href="?style=pointilism">Pointillism</a>
                        <a class="dropdown-item" href="?style=expressionism">Expressionism</a>
                        <a class="dropdown-item" href="?style=impressionism">Impressionism</a>
                        <a class="dropdown-item" href="?style=cubism">Cubism</a>
                        <a class="dropdown-item" href="?style=popart">Pop Art</a>
                        <a class="dropdown-item" href="?style=modernism">Modernism</a>
                        <a class="dropdown-item" href="?style=gothic">Gothic</a>
                        <a class="dropdown-item" href="?style=surrealism">Surrealism</a>
                        <a class="dropdown-item" href="?style=realism">Realism</a>
                        <a class="dropdown-item" href="?style=hyper_realism">Hyper Realism</a>
                        <a class="dropdown-item" href="?style=rococo">Rococo</a>
                        <a class="dropdown-item" href="?style=byzantine">Byzantine</a>
                        <a class="dropdown-item" href="?style=romanticism">Romanticism</a>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Price
            </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?price=0100">$0 - $100</a>
                        <a class="dropdown-item" href="?price=100500">$100 - $500</a>
                        <a class="dropdown-item" href="?price=5001000">$500 - $1000</a>
                        <a class="dropdown-item" href="?price=1000up">$1000 - Up</a>
                    </div>
                </li> --}}
            </ul>
            {{-- <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
</nav>

<!-- GALLERY -->
<div class="container-fluid mx-2 mt-5">
    <div class="card-columns justify-content-center">
        @foreach ($artwork as $img)
        <div class="card">
            <img class="card-img-top" src="{{asset('storage/'.$img->image_path) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><strong>{{$img->name}}</strong></h5>
                <a href="/seeartist/{{ $img->user->id }}">by:{{ $img->user->name }}</a>
                <p class="card-text">{{ $img->type }} / {{ $img->medium }} / {{ $img->style }}</p>
                <p class="card-text">${{ $img->price }}</p>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
