@extends('master')

@section('content')

    <div class="row">
        <div class="col">
            @foreach ($artwork as $img)
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{asset('storage/'.$img->image_path) }}" alt="">
                  </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
