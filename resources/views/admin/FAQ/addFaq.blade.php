@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">FAQ</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">FAQ</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add FAQ</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.faq.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Questions</label>
                    <input type="text" required class="form-control" id="name" placeholder="Questions" name="question">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleTextarea1">Answers</label>
                    <textarea required class="form-control" id="" rows="7" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.faq')}}"  class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection