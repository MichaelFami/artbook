@extends('master') @section('title') Artists @endsection @section('content')

<div class="container mt-5">
  <header class="main-header">
    <div class="row no-gutter">
      <div class="col-lg-4 col-md-5">
        <div class="card mb-5">
          <img class="card-img-top rounded-circle" src="/img/person1.jpg" width="100%" height="100%" alt="">
          <a href="" class="text-center mt-2">Edit Photo <i class="fas fa-pencil-alt"></i></a>
          <h1 class="text-center">John Doe</h1>
          <div class="social_media d-flex flex-row justify-content-center">
            <div><i class="fab fa-twitter fa-lg mx-3"></i></div>
            <div><i class="fab fa-facebook fa-lg mx-3"></i></div>
            <div><i class="fab fa-instagram fa-lg mx-3"></i></div>
            <div><i class="fab fa-linkedin-in fa-lg mx-3"></i></div>
          </div>
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
