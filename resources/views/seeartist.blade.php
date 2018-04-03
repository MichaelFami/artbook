@extends('master') @section('title') Exhibit @endsection @section('content')

<div class="container-fluid mx-2">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div id="sidebar">
                <div class="profile m-3">
                    <img class="card-img-top rounded-circle" src="" width="100%" height="100%" alt="">
                    <h1 class="text-center">{{$user->name}}</h1>
                </div>
                <ul class="list-unstyled text-center">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">BIOGRAPHY</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">DIRECTORY</a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:{{ $user->email }}" class="nav-link">CONTACT ME</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="accordion" class="col-sm-12 col-md-6 col-lg-9">


            <!-- BIOGRAPHY -->
            <div id="collapseOne" class="container collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="row mt-5">
                    <div class="col bio-content">
                        <h1>{{$user->name}}</h1>
                        <br>
                        <p class="lead">
                            {{ $user->bio }}
                        </p>

                    </div>
                </div>

            </div>

            <!-- DIRECTORY -->
            <div id="collapseThree" class="container collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="row">
                    <div class="col directory-content">
                        <h1 class="my-4 text-center text-lg-left">My Directory</h1>
                        @foreach ($uploadedArtwork as $img)
                        <div class="card">
                            <img class="card-img-top" src="{{asset('storage/'.$img->image_path) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$img->name}}</strong></h5>
                                <p class="card-text">{{ $img->type }} / {{ $img->medium }} / {{ $img->style }}</p>
                                <p class="card-text">${{ $img->price }}</p>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
