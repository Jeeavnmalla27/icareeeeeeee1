@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Career Detail</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Career</a></li>
          <li class="breadcrumb-item active" aria-current="page">Jobs</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Carrer Details</h4>
                @if ($detail->count() < 5)                    
                  <a href="{{route('admin.Jobdetail.add')}}" class="btn btn-success">Add New</a>
                  @endif

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Seniority Level</th>
                        <th>Salary</th>
                        <th>Experience</th>
                        <th>Job Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $detail)
                            <tr>
                                <td>{{$detail->title}}</td>
                                <td class="py-1">
                                  <img height="100" width="100" src="{{ asset('images/career') }}/{{$detail->image}}" alt="image" />
                                </td>
                                <td>{{$detail->level}}</td>
                                <td>{{$detail->salary}}</td>
                                <td>{{$detail->experience}}</td>
                                <td>{{$detail->type}}</td>
                                <td>{!!Str::limit($detail->description, 50, $end='...')!!}</td>
                                <td>
                                  <a href="{{route('admin.Jobdetail.edit', ['id'=>$detail->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.Jobdetail.destroy', ['id'=>$detail->id])}}" class="btn btn-danger">Delete</a>

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
