@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add New Journey</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Journey</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Journey</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.journey.store') }}" method="POST">
                    @csrf
                 
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" required name="img" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <label for="step1">Step1</label>
                      <textarea required name="step1"  id="editor1" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="step2">Step2</label>
                      <textarea required name="step2"  id="editor1" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="step3">Step3</label>
                      <textarea required name="step3"  id="editor1" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="step4">Step4</label>
                      <textarea required name="step4"  id="editor1" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="step5">Step5</label>
                      <textarea required name="step5"  id="editor1" class="form-control"></textarea>
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