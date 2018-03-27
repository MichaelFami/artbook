@extends('master') @section('title') Artists @endsection @section('content')
<div class="row justify-content-center">
    <div class="col-4">
        <form action="upload_art" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload New Work</label>
                <input type="file" name="newArt" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <select class="form-control">
              <option>Painting</option>
              <option>Sculpture</option>
              <option>Drawing</option>
              <option>Default select</option>
            </select>
            <button type="submit" name="button">Submit</button>
        </form>
    </div>
</div>
@endsection
