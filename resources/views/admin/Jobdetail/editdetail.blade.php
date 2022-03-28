@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Career Detail</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Career</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Career Details</h4>
                <form class="form-sample" action="{{ route('admin.Jobdetail.update',['id'=>$detail->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="title" value="{{$detail->title}}" id="title" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                       <div class="form-group">
                    <label>File upload</label>
                    <input type="file" required name="img" class="form-control" value="{{$detail->image}}">
                  </div>
                  </div>
                 
                  <p class="card-description" style="color:black;"> Job Summary</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="street_name" class="col-form-label">Seniority Level</label>
                        <div class="col-sm-9">
                          <input type="text" name="level" id="level" value="{{$detail->level}}"class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label id="district" class="col-form-label">Salary</label>
                        <div class="col-sm-9">
                          <input type="text" name="salary" value="{{$detail->salary}}"  id="salary" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="postal" class="col-form-label">Experience</label>
                        <div class="col-sm-9">
                          <input type="text" name="experience" id="experience" value="{{$detail->experience}}"  class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="country" class="col-form-label">Job Type</label>
                        <div class="col-sm-9">
                          <select name="type" id="type" class="form-control">
                            <option>Full Time</option>
                            <option>Part Time</option>
                          </select> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea required class="form-control" id="exampleTextarea1"  name="description" >{{$detail->description}}</textarea>
                  </div>
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  <a href="{{route('admin.Jobdetail')}}" class="btn btn-dark">Cancel</a>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection