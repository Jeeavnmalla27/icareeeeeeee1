@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">User Contact Messages</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Message</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">User Messages</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Full Name </th>
                        <th> Phone Number </th>
                        <th> Service Order </th>
                        
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($consulation as $contact)
                            <tr>
                                <td>
                                    <span>{{$contact->name}}</span>
                                  </td>
                                  <td> {{$contact->phone}} </td>
                                  <td> {{$contact->order}} </td>

                                  <td>
                                  <a href="{{route('admin.consulation.destroy', ['id'=>$contact->id])}}" class="btn btn-danger">Delete</a>
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
