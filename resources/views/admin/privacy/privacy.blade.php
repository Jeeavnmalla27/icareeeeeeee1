@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Privacy</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Privacy</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Privacy  Main Content</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.privacy.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($privacy as $privacy)
                            <tr>
                               
                                <td>{!! $privacy->content !!}</td>
                                <td>
                                  <a href="{{route('admin.privacy.edit', ['id'=>$privacy->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.privacy.destroy', ['id'=>$privacy->id])}}" class="btn btn-danger">Delete</a>
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
