@extends('master') @section('title') Exhibit @endsection @section('content')

<!-- HOME SECTION -->
<header id="home-section">
    <div class="dark-overlay">
        <div class="home-inner">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 d-none d-lg-block">
                            <h1 class="display-4 text-white">Welcome to EXHIBIT</h1>
                            <div class="d-flex flex-row">
                                <h3 class="p-4 align-self-start text-white"><strong>An online resource for local artists to SHOWCASE, and/or SELL their work.</strong>
                                </h3>
                            </div>
                            <div class="d-flex flex-row">
                                <h3 class="p-4 align-self-start text-white"><strong>Become inspired by unique pieces from some of our local painters, photographers, sculptors, and digital artists.</strong>
                                </h3>
                            </div>
                        </div>

                        @guest

                        <div class="col-lg-4">
                            <div class="card text-center card-form">
                                <div class="card-body text-white">
                                    <h3>Register Today</h3>
                                    <p>Please fill out this form to register</p>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                              <strong>{{ $errors->first('name') }}</strong>
                                            </span> @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                              <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required> @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                              <strong>{{ $errors->first('password') }}</strong>
                                            </span> @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="password_confirmation" required>
                                        </div>
                                        <button type="submit" class="btn btn-outline-light btn-block">
                                          {{ __('Register') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endguest

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- SECTION 1 -->
<section>
    <div id="discover" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h3 class="display-4 discover_title">DISCOVER - LOVE - BUY</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 text-center">
                <p class="text-center"><i class="fas fa-search fa-4x"></i></p>
                <h2>Discover Local Artists</h2>
                <p class="text-justify">Find the piece that is destined for you. With countless works of art to choose from, you will find something unique for every space or taste.</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="far fa-heart fa-4x"></i></p>
                <h2>Love Their Work</h2>
                <p class="text-justify">With so many art to choose from, you will fall in love with many of our artists work.</p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fas fa-dollar-sign fa-4x"></i></p>
                <h2>Buy</h2>
                <p class="text-justify">Support your local artist and own your very own one-of-a-kind art piece.</p>
            </div>
        </div>
    </div>
</section>

<!-- RECENT ARTWORK -->
<section>
    <div id="recent_list" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3>FEATURED ARTWORK</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div id="featured-artist" class="owl-carousel owl-theme">
                        <div class="img-container">
                            <img class="img-fluid" src="/img/4_piece.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/CSeries_03.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/girl_with_fire_hair_dauntless.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/love_and_laughter.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/opposition-of-flesh-to-spirit.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/girl_with_hat_fluidity.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/frustration.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/let_me_gather_the_river.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/embrace_and_celebrate.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/mantodea_femenine-host.jpg" alt="artwork">
                        </div>
                        <div class="img-container">
                            <img class="img-fluid" src="/img/platerodrilus_ornament.jpg" alt="artwork">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonial">
    <div class="conatiner-fluid">
        <h3 class="title text-center py-4">A WORD FROM OUR ARTISTS</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">Exhibit makes it so easy to get my work out there for all the world to see. For someone who is starting back up again, Exhibit is a great way for my art to gain exposure.</div>
                                </div>
                                <br>
                                <p class="lead">by: Iliana Rodriguez</p>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">As artists and art lovers, we need a way to communicate and support each other. Exhibit makes is easy to view our colleagues work, meet new artists, and keep in touch.
                                    </div>
                                </div>
                                <br>
                                <p class="lead">by: Luis Corpus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                                <div class="d-flex flex-row">
                                    <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- FEATURED ARTISTS -->
<!-- <section id="artist" class="py-5">
    <div class="container-fluid">
        <h3>FEATURED ARTISTS</h3>
        <hr>
        <div class="row mx-2 text-center">
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200X200" alt="" class="img-fluid rounded-circle mb-2">
                <h4>Iliana Rodriguez</h4>
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200X200" alt="" class="img-fluid rounded-circle mb-2">
                <h4>Luis Corpus</h4>
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200X200" alt="" class="img-fluid rounded-circle mb-2">
                <h4>Clarita Fajutag</h4>
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200X200" alt="" class="img-fluid rounded-circle mb-2">
                <h4>Belinda Diego</h4>
            </div>
        </div>
    </div>
</section> -->



@endsection
