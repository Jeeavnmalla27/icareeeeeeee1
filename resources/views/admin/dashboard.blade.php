@extends('layouts.admin')

@section('content')
<!-- <div class="content-wrapper">
    <div class="row ">
      <div class="col-12 grid-margin">
        
      <div class="col-md-12 col-xl-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To do list</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="enter task..">
              <button class="add btn btn-primary todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                <li>
                  <div class="form-check form-check-primary">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Your First Task </label>
                  </div>
                  <i class="remove mdi mdi-close-box"></i>
                </li>
              </ul>
            </div>
          </div>          
        </div>
      </div>
    </div> -->
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
                        <th> E-mail </th>
                        <th> Contact </th>
                        <th> Message </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    <span>{{$contact->name}}</span>
                                  </td>
                                  <td> {{$contact->email}} </td>
                                  <td> {{$contact->contact}} </td>
                                  <td>  {{$contact->message}} </td>
                                <td>
                                  
                                  <a href="{{route('admin.contact.destroy', ['id'=>$contact->id])}}" class="btn btn-danger">Delete</a>
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
