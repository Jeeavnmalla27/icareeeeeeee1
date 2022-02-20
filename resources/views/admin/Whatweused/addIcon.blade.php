@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Icon/Title</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Icon/Title</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Icon/Title</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.icon.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                      <label for="name">Title</label>
                      <input type="text" required name="name" id="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Icon</label>
                    <input type="file" required name="icon" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.icon')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
