@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> About Us </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About Us Main Content</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.about.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th> Name </th>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $content)
                            <tr>
                                <td class="py-1">
                                  <img height="100" width="100" src="{{ asset('images/about') }}/{{$content->image}}" alt="image" />
                                </td>
                                <td> {{$content->title}} </td>
                                <td >{!!Str::limit($content->content, 50, $end='...')!!}</td>
                                <td>
                                  <a href="{{route('admin.about.edit', ['id'=>$content->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.about.destroy', ['id'=>$content->id])}}" class="btn btn-danger">Delete</a>
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
