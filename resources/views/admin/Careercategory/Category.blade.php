@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Category</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Careers</a></li>
          <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Career Category</h4>
                               
                  <a href="{{route('admin.Category.add')}}" class="btn btn-success">Add New</a>
                

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>                      
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>
                                  <a href="{{route('admin.Category.edit', ['id'=>$category->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.Category.destroy', ['id'=>$category->id])}}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
