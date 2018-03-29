@extends('master') @section('title') Artists @endsection @section('content')


<!-- SIDEBAR -->

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-3 col-lg-2 order-2 order-md-1 col-10.mx-auto d.flex flex-column sidebar p-0">
      <div class="profile mt-0">
        <ul class="list-group list-group-flush">
          <div class="list-group-item profile-logo py-2">
            <img class="img-fluid my-3 rounded-circle" src="/img/person1.jpg" alt="profile_pic">
            <a href="" class="d-flex flex-row justify-content-center mt-2">Edit Photo <i class="fas fa-pencil-alt ml-2"></i></a>
            <h1 class="d-flex flex-row justify-content-center">John Doe</h1>
          </div>
          <a href="" class="list-group-item list-group-item-action text-center"><strong>BIOGRAPHY</strong></a>
          <a href="" class="list-group-item list-group-item-action text-center"><strong>UPLOAD ART</strong></a>
          <a href="" class="list-group-item list-group-item-action text-center"><strong>CONTACT ME</strong></a>
          <a href="" class="list-group-item list-group-item-action text-center"><strong>DIRECTORY</strong></a>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /#wrapper -->
<!-- <header class="main-header">
    <div class="row">
      <div class="col-sm-3 col-md-3 sidebar">
        <img class="card-img-top rounded-circle" src="/img/person1.jpg" width="200px" height="300px" alt="">
        <a href="" class="d-flex flex-row justify-content-center mt-2">Edit Photo <i class="fas fa-pencil-alt"></i></a>
        <h1 class="d-flex flex-row justify-content-center">John Doe</h1>
        <div class="social_media d-flex flex-row justify-content-center">
          <div><i class="fab fa-twitter fa-lg mx-3"></i></div>
          <div><i class="fab fa-facebook fa-lg mx-3"></i></div>
          <div><i class="fab fa-instagram fa-lg mx-3"></i></div>
          <div><i class="fab fa-linkedin-in fa-lg mx-3"></i></div>
        </div>
        <div id="sidebar-wrapper">
          <nav id "sidebar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">Biography</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Upload Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Directory</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Me</a>
              </li>
            </ul>
          </nav>
        </div> -->
<!-- <div class="card-body">
            <form action="upload_art" method="post" enctype="multipart/form-data">
              @csrf
              <div class="input-group mb-2">
                <label for="exampleFormControlFile1">Upload New Work</label>
                <input type="file" name="newArt" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Name of Piece:</span>
                </div>
                <input name="artName" type="text" class="form-control" id="inputName" placeholder="My First Piece">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Type of Art:</span>
                </div>
                <select name="artType" class="form-control" id="selectType">
                      <option>Painting</option>
                      <option>Sculpture</option>
                      <option>Drawing</option>
                      <option>Default select</option>
                    </select>
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">$</span>
                </div>
                <input name="artPrice" type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="artDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" name="button">Submit</button>
            </form>
          </div> -->
</div>
</div>
</header>
</div>

<!-- <div class="row justify-content-center">
    <div class="col-4">
        <form action="upload_art" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="exampleFormControlFile1">Upload New Work</label>
                <input type="file" name="newArt" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name of Piece:</span>
                </div>
                <input name="artName" type="text" class="form-control" id="inputName" placeholder="My First Piece">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Type of Art:</span>
                </div>
                <select name="artType" class="form-control" id="selectType">
                  <option>Painting</option>
                  <option>Sculpture</option>
                  <option>Drawing</option>
                  <option>Default select</option>
                </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">$</span>
              </div>
              <input name="artPrice" type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="artDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" name="button">Submit</button>
        </form>
    </div>
</div> -->



@endsection
