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
                <a href="{{route('admin.form.add')}}" class="btn btn-success">Add New</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Full Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                        <th> Phone Number </th>
                        <th> City</th>
                        <th> Work Experience</th>
                        <th> Position Applied</th>
                        <th>Linkedin Url</th>
                        <th> Cover letter</th>
                        <th> Upload Resume</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            <tr>
               
                                  <td> {{$form->f_name}} </td>
                                  <td> {{$form->l_name}} </td>
                                  <td> {{$form->email}} </td>
                                  <td>  {{$form->phone}} </td>
                                  <td>  {{$form->city}} </td>
                                  <td>  {{$form->work_experience}} </td>
                                  <td>  {{$form->position_id}} </td>
                                  <td>  {{$form->linkedin}} </td>
                                  <td>  {{$form->cover_letter}} </td>
                                  <td>  {{$form->resume}} </td>
                                <td>
                                  <a href="{{route('admin.form.edit', ['id'=>$form->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.form.destroy', ['id'=>$form->id])}}" class="btn btn-danger">Delete</a>
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
