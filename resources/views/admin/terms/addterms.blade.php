@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Terms</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Terms</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Terms</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.terms.store') }}" method="POST">
                    @csrf
                
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea required class="form-control" id="exampleTextarea1" rows="7" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.terms')}}"  class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection