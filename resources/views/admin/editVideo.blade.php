@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Slider Video</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Slider</a></li>
          <li class="breadcrumb-item active" aria-current="page">add Video</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Video</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.video.update',['id'=>$images->id]) }}" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required name="name" id="name" class="form-control" value="{{$images->name}}">
                </div>
                  <div class="form-group">
                      <div class="mb-5">
                          <img class="img-fluid" src="{{asset('images/slider')}}/{{$images->image}}">
                      </div>
                    <label>New Video upload</label>
                    <input type="file" required name="vid" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.video')}}" class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection