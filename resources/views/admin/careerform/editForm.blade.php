@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Company Contacts</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">contacts</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Company Contact Details</h4>
                <form class="form-sample" action="{{ route('admin.form.update', ['id'=>$forms->id]) }}" enctype="multipart/form-data"  method="POST">@csrf
                <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="f_name" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="f_name" id="f_name" value="{{$forms->f_name}}class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="l_name" class=" col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input id="l_name" name="l_name" type="text" value="{{$forms->l_name}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" id="email" value="{{$forms->email}}"class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone" class=" col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                              <input id="phone" name="phone" type="number" value="{{$forms->phone}}"class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                 
                  <p class="card-description"> city</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="city" class="col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" name="city" id="city" value="{{$forms->city}}"class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label id="work_experience" class="col-form-label">Work Experience</label>
                        <div class="col-sm-9">
                          <input type="number" name="work_experience"  id="work_experience" value="{{$forms->work_experience}}"class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="postal" class="col-form-label">Position Applied</label>
                        <div class="col-sm-9">
                         <select name="position_id"  class="form-control">
                             @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                          </select> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Linkedin Profile</label>
                        <div class="col-sm-9">
                          <input type="url" name="linkedin" id="linkedin"value="{{$forms->linkedin}}" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="cover_letter">Cover Letter</label>
                    <textarea required class="form-control" id="description" value="{{$forms->cover_letter}}" rows="7" name="cover_letter"></textarea>
                  </div>
                    </div>
                       </div>
                       <div class="form-group">
                    <label> upload Resume</label>
                    <input type="file" required name="resume" class="form-control">
                  </div>    
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection