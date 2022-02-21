@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Careers</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Careers</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Company Careers</h4>
                <form class="form-sample" action="{{ route('admin.Category.update', ['id'=>$category->id]) }}" method="POST">
                  @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" id="name" value="{{$category->name}}"class="form-control" />
                            </div>
                          </div>
                        
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  <button><a href="{{route('admin.Category')}}" class="btn btn-dark">Cancel</a></button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection