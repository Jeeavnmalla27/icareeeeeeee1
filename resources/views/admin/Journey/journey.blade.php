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
                    <h4 class="card-title">Company Journey</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.journey.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th>Step1</th>
                            <th>Step2</th>
                            <th>Step3</th>
                            <th>Step4</th>
                            <th>Step5</th>
                           
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($journey as $journey)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('images/journey') }}/{{$journey->image}}" alt="image" />
                                </td>
                                <td>{{$journey->name}}</td>
                                <td>{{$journey->step1}}</td>
                                <td>{{$journey->step2}}</td>
                                <td>{{$journey->step3}}</td>
                                <td>{{$journey->step4}}</td>
                                <td>{{$journey->step5}}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{route('admin.journey.edit',['id'=>$journey->id])}}">Edit</a>
                                  <a class="btn btn-danger" href="{{route('admin.journey.destroy',['id'=>$journey->id])}}">Delete</a>

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
