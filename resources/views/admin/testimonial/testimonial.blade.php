@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Testimonial of Our Company</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company Testimonial</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.testimonial.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonial as $testimonial)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('images/testimonial') }}/{{$testimonial->image}}" alt="image" />
                                </td>
                                <td>{{$testimonial->name}}</td>
                                <td>{{$testimonial->position}}</td>
                                <td>{{$testimonial->description}}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{route('admin.testimonial.edit',['id'=>$testimonial->id])}}">Edit</a>
                                  <a class="btn btn-danger" href="{{route('admin.testimonial.destroy',['id'=>$testimonial->id])}}">Delete</a>

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
