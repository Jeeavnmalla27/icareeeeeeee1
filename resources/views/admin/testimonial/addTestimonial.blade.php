@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Testimonial</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Testimonial</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.testimonial.store') }}" method="POST">
                    @csrf
                 
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" required name="img" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input required name="name"  id="name" class="form-control"></input>
                  </div>
                  <div class="form-group">
                      <label for="position">Position</label>
                      <input required name="position"  id="position" class="form-control"></input>
                  </div>
                  <div class="form-group">
                      <label for="text">Description</label>
                      <textarea required name="description"  id="editor1" class="form-control"></textarea>
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