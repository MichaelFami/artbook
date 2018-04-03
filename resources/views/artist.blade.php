@extends('master') @section('title') Profile @endsection @section('content')

<div class="container-fluid mx-2">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div id="sidebar">
                <div class="profile m-3">
                    <img class="card-img-top rounded-circle" src="{{asset('storage/'.$user->profile_image_path) }}" width="100%" height="100%" alt="">
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
                            <label for="exampleFormControlFile2">Upload New Profile Photo</label>
                            <input type="file" name="newPhoto" class="form-control-file" id="exampleFormControlFile2">
                            <button type="submit" name="button">Submit</button>
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
                <form action="upload_bio" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-2">
                        <label for="exampleFormControlTextarea5">Upload New Bio</label>
                        <textarea name="newBio" class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                        <button type="submit" name="button">Submit</button>
                    </div>
                </form>
            </div>

            <!-- UPLOAD ART -->

            <div id="collapseTwo" class="container collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="row mt-5">
                    <div class="col upload-content">
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
                  <option value="Landscape">Landscape</option>
                  <option value="Portrait">Portrait</option>
                  <option value="Still_Life">Still Life</option>
                  <option value="Abstract">Abstract</option>
                  <option value="From_Life">From Life</option>
                </select>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Style:</span>
                                    </div>
                                    <select class="form-control" name="artStyle">
                  <option value="Abstract">Abstract</option>
                  <option value="Contemporary">Contemporary</option>
                  <option value="Baroque">Baroque</option>
                  <option value="Renaissance">Renaissance</option>
                  <option value="Pointillism">Pointillism</option>
                  <option value="Expressionism">Expressionism</option>
                  <option value="Impressionism">Impressionism</option>
                  <option value="Cubism">Cubism</option>
                  <option value="Pop_Art">Pop Art</option>
                  <option value="Modernism">Modernism</option>
                  <option value="Gothic">Gothic</option>
                  <option value="Surrealism">Surrealism</option>
                  <option value="Realism">Realism</option>
                  <option value="Hyper_realism">Hyper realism</option>
                  <option value="Rococo">Rococo</option>
                  <option value="Byzantine">Byzantine</option>
                  <option value="Romanticism">Romanticism</option>
                </select>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Medium:</span>
                                    </div>
                                    <select class="form-control" name="artMedium">
                  <option value="Oil">Oil</option>
                  <option value="Acrylic">Acrylic</option>
                  <option value="Tempura">Tempura</option>
                  <option value="Ink">Ink</option>
                  <option value="Ceramic">Ceramic</option>
                  <option value="Wood">Wood</option>
                  <option value="Wire">Wire</option>
                  <option value="Plaster">Plaster</option>
                  <option value="Marble">Marble</option>
                  <option value="Graphite">Graphite</option>
                  <option value="Pen">Pen</option>
                  <option value="Charcoal">Charcoal</option>
                  <option value="Paper">Paper</option>
                  <option value="Colored pencil">Colored pencil</option>
                  <option value="Oil pastel">Oil pastel</option>
                  <option value="Soft pastel">Soft pastel</option>
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
                      <img class="img-fluid img-thumbnail" src="{{asset('storage/'.$img->image_path) }}" alt="">
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
