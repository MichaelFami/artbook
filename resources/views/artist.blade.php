@extends('master') @section('title') Artists @endsection @section('content')

<div class="container mt-5">
  <header class="main-header">
    <div class="row no-gutter">
      <div class="col-lg-4 col-md-5">
        <div class="card mb-5">
          <img class="card-img-top" src="/img/person1.jpg" width="100%" height="100%" alt="">
          <div class="card-body">
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
                <input type="text" class="form-control">
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
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="d-flex flex-column">
          <div class="p5 ">
            <div class="name d-flex flex-row justify-content-between align-items-center">
              <h1 class="display-4">John Doe</h1>
              <div><i class="fab fa-twitter fa-2x"></i></div>
              <div><i class="fab fa-facebook fa-2x"></i></div>
              <div><i class="fab fa-instagram fa-2x"></i></div>
              <div><i class="fab fa-linkedin-in fa-2x"></i></div>
            </div>
          </div>
          <div class="p-2 bg-black">
            Teacher / Artist
          </div>
          <div>
            <div class="d-flex flex-row text-white align-items-stretch text-center">
              <div class="port-item p-4 bg-primary">
                <i class="fas fa-home d-block"></i> Home
              </div>
              <div class="port-item p-4 bg-success">
                <i class="fas fa-graduation-cap d-block"></i> Resume
              </div>
              <div class="port-item p-4 bg-warning">
                <i class="fas fa-paint-brush d-block"></i> Works
              </div>
              <div class="port-item p-4 bg-danger">
                <i class="fas fa-envelope d-block"></i> Contact
              </div>
            </div>
          </div>
        </div>
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
