@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Home Page Background Image</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Icon</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Icon/Title</h4>
                    @if($images->count() < 7)
                      <a class="btn btn-primary float-right" href="{{route('admin.icon.add')}}">Add Icon</a>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Icon</th>
                            <th> Name </th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                            <tr>
                                <td class="py-1">
                                  <img class="img-fluid" src="{{ asset('images/slider') }}/{{$image->image}}" alt="image" />
                                </td>
                                <td>
                                  {{$image->name}}
                                </td>
                                <td>
                                  <a class="btn btn-primary" href="{{route('admin.icon.edit',['id'=>$image->id])}}">Edit</a>
                                  <a class="btn btn-danger" href="{{route('admin.icon.destroy',['id'=>$image->id])}}">Delete</a>

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
