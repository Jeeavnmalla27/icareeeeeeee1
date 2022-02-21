@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit New Testimonial</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
          <li class="breadcrumb-item active" aria-current="page">edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Testimonial</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.testimonial.update',['id'=>$testimonial->id]) }}" method="POST">
                    @csrf
                  
                  <div class="form-group">
                    <div class="mb-5">
                        <img height="100" width="100" src="{{asset('images/testimonial')}}/{{$testimonial->image}}" alt="avatar" class="img-fuild">
                    </div>
                    <label>Upload New Avatar</label>
                    <input type="file" required name="img" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="name"></label>
                      <input required name="name"  id="name" value="{{$testimonial->name}}" class="form-control"></input>
                  </div>
                  <div class="form-group">
                      <label for="position"></label>
                      <input required name="position"  id="position" value="{{$testimonial->position}}" class="form-control"></input>
                  </div>
                  <div class="form-group">
                      <label for="text">Description</label>
                      <textarea required name="description"  id="editor1" Value="{{$testimonial->description}}"class="form-control"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.testimonial')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection