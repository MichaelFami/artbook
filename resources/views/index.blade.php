@extends('master') @section('title') X-Hibit @endsection @section('content')

<!-- HOME SECTION -->
<header id="home-section">
  <div class="dark-overlay">
    <div class="home-inner">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
              <h1 class="display-4 text-white">lorem15lorem15labellore</h1>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check check1"></i>
                </div>
                <div class="p-4 align-self-end text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check check1"></i>
                </div>
                <div class="p-4 align-self-end text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check check1"></i>
                </div>
                <div class="p-4 align-self-end text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card text-center card-form">
                <div class="card-body text-white">
                  <h3>Sign Up Today</h3>
                  <p>Please fill out this form to register</p>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                    </div>
                    <input type="submit" class="btn btn-outline-light btn-block">
                  </form>
                </div>
              </div>
            </div>
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
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <div class="card mt-2">
          <div class="card-body">
            <p class="text-center"><i class="fas fa-search fa-4x"></i></p>
            <h2 class="card-title text-center discover_text">Discover Local Artists</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt accusantium natus tempore fugiat deserunt voluptate, veniam dignissimos ab odit et consequatur, provident reiciendis doloremque ducimus.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <div class="card-body">
            <p class="text-center"><i class="far fa-heart fa-4x"></i></p>
            <h2 class="card-title text-center discover_text">Love Their Work</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatem at deleniti odit adipisci sit tempore quasi provident, eos reiciendis nisi, esse molestiae a voluptatibus.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
        <div class="card">
          <div class="card-body">
            <p class="text-center"><i class="fas fa-dollar-sign fa-4x"></i></p>
            <h2 class="card-title text-center discover_text">Buy Their Work</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, blanditiis? Consequuntur sequi cumque fugit aliquam minus, numquam maiores, placeat adipisci nesciunt eligendi distinctio, atque, consequatur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RECENT WORK -->
<section>
  <div id="recent_list" class="container-fluid mt-5">
    <div class="row">
      <div class="col">
        <h3>FEATURED ARTWORK</h3>
      </div>
      <div class="row mx-2">
        <div class="col">
          <div class="owl-carousel">
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
            <div><img src="http://via.placeholder.com/200X200" alt=""></div>
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
    <h3 class="title text-center pt-5">A WORD FROM OUR ARTISTS</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mt-2">
                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                <div class="d-flex flex-row">
                  <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
              </div>
              <div class="col-lg-6 mt-2">
                <p class=""><i class="fas fa-quote-right fa-2x"></i></p>
                <div class="d-flex flex-row">
                  <div class="align-self-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Third slide">
        </div>
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



@endsection

@section('bottom_js')
<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false
        }
      }
    });
  });
</script>
@endsection
