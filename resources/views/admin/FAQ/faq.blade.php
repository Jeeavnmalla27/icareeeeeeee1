@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> FAQ </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">FAQ</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About Us Main Content</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.faq.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Question</th>
                            <th>Answers</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                            <tr>
                                
                                <td> {{$question->question}} </td>
                                <td>{!! $question->answers !!}</td>
                                <td>
                                  <a href="{{route('admin.faq.edit', ['id'=>$question->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.faq.destroy', ['id'=>$question->id])}}" class="btn btn-danger">Delete</a>
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
