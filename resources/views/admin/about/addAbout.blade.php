@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">About Us</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">About us</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add About Us</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.about.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Heading</label>
                    <input type="text" required class="form-control" id="name" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" required name="img" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea required class="form-control" id="exampleTextarea1" rows="7" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.about.about')}}"  class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection