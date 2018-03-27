@extends('master')

@section('title')
  X-Hibit
@endsection

  @section('content')

    <!-- HOME SECTION -->
    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
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
                  <div class="card-body">
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
    </header>



  @endsection
