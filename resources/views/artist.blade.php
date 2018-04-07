@extends('master') @section('title') Exhibit @endsection @section('content')

<div class="container-fluid mx-2">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3">
      <div id="sidebar">
        <div class="profile m-3">
          <img class="card-img-top rounded-circle" src="{{asset('storage/'.$user->profile_image_path) }}" width="300px" height="275px" alt="">
          <h1 class="text-center">{{ $user->name}}</h1>
        </div>
        <ul class="list-unstyled text-center">
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Edit Profile Photo</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">BIOGRAPHY</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">UPLOAD ART</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">DIRECTORY</a>
          </li>
          <li class="nav-item">
            <a href="mailto:{{ $user->email}}" class="nav-link">CONTACT ME</a>
          </li>
        </ul>
      </div>
    </div>

    <div id="accordion" class="col-sm-12 col-md-6 col-lg-9">

      <!-- PROFILE PICTURE -->
      <div id="collapseFour" class="container collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="row mt-5">
          <form action="upload_photo" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-2">
              <h3 for="exampleFormControlFile2">Upload New Profile Photo</h3>
              <input type="file" name="newPhoto" class="form-control-file" id="exampleFormControlFile2">
              <button class="mt-3" type="submit" name="button">Submit</button>
            </div>
          </form>
        </div>
      </div>

      <!-- BIOGRAPHY -->
      <div id="collapseOne" class="container collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="row mt-5">
          <div class="col bio-content">
            <h1>{{ $user->name}}</h1>
            <br>
            <p class="lead">{{$user->bio}}
            </p>
          </div>
        </div>
        <div>
          <form action="upload_bio" method="post" enctype="multipart/form-data">
            @csrf
            <h4 for="exampleFormControlTextarea5">Submit Biography</h4>
            <div class="input-group mb-2">
              <textarea name="newBio" class="form-control col-8" id="exampleFormControlTextarea5" rows="6"></textarea>
            </div>
            <button type="submit" name="button">Submit</button>
          </form>
        </div>
      </div>

      <!-- UPLOAD ART -->

      <div id="collapseTwo" class="container collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="row mt-5">
          <div class="col upload-content">
            <div class="card-body">
              <form action="upload_art" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-2">
                  <h4 for="exampleFormControlFile1">Upload Art</h4>
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
                    <option value="landscape">Landscape</option>
                    <option value="portrait">Painting</option>
                    <option value="still_life">Photograph</option>
                    <option value="mixed_media">Mixed Media</option>
                    <option value="drawing">Drawing</option>
                    <option value="sculpture">Sculpture</option>
                  </select>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Style:</span>
                  </div>
                  <select class="form-control" name="artStyle">
                    <option value="abstract">Abstract</option>
                    <option value="contemporary">Contemporary</option>
                    <option value="baroque">Baroque</option>
                    <option value="renaissance">Renaissance</option>
                    <option value="pointillism">Pointillism</option>
                    <option value="expressionism">Expressionism</option>
                    <option value="impressionism">Impressionism</option>
                    <option value="cubism">Cubism</option>
                    <option value="pop_art">Pop Art</option>
                    <option value="modernism">Modernism</option>
                    <option value="gothic">Gothic</option>
                    <option value="surrealism">Surrealism</option>
                    <option value="realism">Realism</option>
                    <option value="hyper_realism">Hyper realism</option>
                    <option value="rococo">Rococo</option>
                    <option value="byzantine">Byzantine</option>
                    <option value="romanticism">Romanticism</option>
                  </select>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Medium:</span>
                  </div>
                  <select class="form-control" name="artMedium">
                    <option value="oil">Oil</option>
                    <option value="acrylic">Acrylic</option>
                    <option value="tempura">Tempura</option>
                    <option value="ink">Ink</option>
                    <option value="ceramic">Ceramic</option>
                    <option value="wood">Wood</option>
                    <option value="wire">Wire</option>
                    <option value="plaster">Plaster</option>
                    <option value="marble">Marble</option>
                    <option value="graphite">Graphite</option>
                    <option value="pen">Pen</option>
                    <option value="charcoal">Charcoal</option>
                    <option value="paper">Paper</option>
                    <option value="colored_pencil">Colored pencil</option>
                    <option value="oil_pastel">Oil pastel</option>
                    <option value="soft_pastel">Soft pastel</option>
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


      <!-- DIRECTORY -->
      <div id="collapseThree" class="container collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="row">
          <div class="col directory-content">
            <h1 class="my-4 text-center text-lg-left">My Directory</h1>
            <div class="row text-center text-lg-left">
              @foreach ($uploadedArtwork as $img)
              <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-t" src="{{asset('storage/'.$img->image_path) }}"  alt="">
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
