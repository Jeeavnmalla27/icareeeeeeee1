@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit New Journey</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Journey</a></li>
          <li class="breadcrumb-item active" aria-current="page">edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Journey</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.journey.update',['id'=>$journey->id]) }}" method="POST">
                    @csrf
                  
                  <div class="form-group">
                    <div class="mb-5">
                        <img height="100" width="100" src="{{asset('images/journey')}}/{{$journey->image}}" alt="avatar" class="img-fuild">
                    </div>
                    <label>Upload New Avatar</label>
                    <input type="file" required name="img"  value="{{$journey->image}}"class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="step1">Step1</label>
                      <textarea required name="step1"  id="step1" value="{{$journey->step1}}" class="form-control">{{$journey->step1}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="step2">Step2</label>
                      <textarea required name="step2"  id="step2" value="{{$journey->step2}}" class="form-control">{{$journey->step2}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="step3">Step3</label>
                      <textarea required name="step3"  id="step3" value="{{$journey->step3}}" class="form-control">{{$journey->step3}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="step4">Step4</label>
                      <textarea required name="step4"  id="step4"  value="{{$journey->step4}}" class="form-control">{{$journey->step4}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="step4">Step5</label>
                      <textarea required name="step5"  id="step5"  value="{{$journey->step5}}" class="form-control">{{$journey->step5}}</textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.journey')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection