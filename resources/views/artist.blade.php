@extends('master') @section('title') Artists @endsection @section('content')

<div id="sidebar">
  <div class="profile m-3">
      <img class="card-img-top rounded-circle" src="/img/person1.jpg" width="100%" height="100%" alt="">
      <a href=""><h5 class="text-center mt-2">Edit Photo</h5></a>
      <h1 class="text-center">John Doe</h1>
  </div>
  <ul class="list-unstyled text-center">
    <li class="nav-item">
      <a href="#biography" class="nav-link">BIOGRAPHY</a>
    </li>
    <li class="nav-item">
      <a href="/upload" class="nav-link">UPLOAD ART</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">DIRECTORY</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">CONTACT ME</a>
    </li>
  </ul>
</div>

<!-- BIOGRAPHY -->
<div id="biography" class="container main">
  <div class="row mt-5">
    <div class="col">
      <h1>John Doe</h1>
      <br>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae consequatur exercitationem, neque dolorum molestias asperiores magni nisi debitis consectetur hic, nam culpa. Accusamus exercitationem ut tempora corporis nesciunt repellendus impedit?</p>
      <br>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sint, nihil dolore soluta magnam porro consectetur nisi facilis! Culpa obcaecati ea sapiente quia ipsa distinctio hic harum, voluptas in sit.</p>
      <br>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, amet. Explicabo sit assumenda modi totam dicta, voluptatum adipisci magnam aperiam sint molestiae eum vel libero possimus accusantium ratione cum, excepturi et quam eaque doloremque provident reiciendis est! Tempora id harum ad sunt, maiores suscipit. Asperiores sapiente quaerat ullam quisquam at.</p>
    </div>
  </div>
</div>

<!-- <div class="container mt-5">
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
    </header>
</div>
</div>
</header>
</div> -->





@endsection
