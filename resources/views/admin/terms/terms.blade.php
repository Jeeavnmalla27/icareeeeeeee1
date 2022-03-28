@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Terms</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Terms</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Terms  Main Content</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.terms.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($terms as $terms)
                            <tr>
                               
                                <td>{!! $terms->content !!}</td>
                                <td>
                                  <a href="{{route('admin.terms.edit', ['id'=>$terms->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.terms.destroy', ['id'=>$terms->id])}}" class="btn btn-danger">Delete</a>
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
