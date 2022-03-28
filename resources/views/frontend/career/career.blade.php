@extends('frontend.layouts.navmain')
@section('title')
Career
@endsection

@section('main-container')



<!--Icare Journey -->
<div class="breadcrumb-area bg-gradient text-center" >
    
  
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2">
              <h1>Careers</h1>
              <ul class="breadcrumb">
                  <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home"></i> Home</a></li>
                  <li class="active">Careers</li>
              </ul>
          </div>
      </div>
  </div>
</div>





<section id="open-position" style="background:#f7fafd;">
  <div class="container pt-5">
      <div class="row no-gutters">
         
          <div class="col-12 text-center w-100">
              <div class="form-row gallery text-center"> <!-- grid - class -->
 
              @foreach($careers as $career)
                  <div class="col-lg-4 col-sm-6 mb-4 grid-item marketing">
                    
                    <div class="card p-4 mb-4 mb-xl-0 shadow">

                        <div class="profile bg-color-green">
                            <span> <i class="lab la-sketch"></i></span>
                          
                        </div>
                      <div class="card-body px-1 job-card-text">
                      <h5 class="card-title font-size-16">{{$career->title}}</h5>
                        <p class="card-text text-muted truncate" style="font-size: 14px; text-align: left;">
                        {!!Str::limit($career->description, 50, $end='...')!!}
                        </p>
                        <div class="card-badges">
                            <span class="badge badge-soft-success">{{$career->type}}</span>
                            <span class="badge badge-soft-success">{{$career->experience}}</span>
                            <span class="badge badge-soft-success">{{$career->level}}</span>
                        </div>
                        <div class="career-links">
                          <a href="{{route('frontend.detail', ['id'=>$career->id])}}" class="details-btn float-left"> See Details</a>
                        </div>
                    </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- <div class="col-lg-4 col-sm-6 mb-4 grid-item marketing">
                    
                        <div class="card p-4 mb-4 mb-xl-0 shadow">

                        <div class="profile bg-color-green">
                            <span> <i class="lab la-sketch"></i></span>
                          
                        </div>
                      <div class="card-body px-1 job-card-text">
                      <h5 class="card-title font-size-16">Social Media Manager</h5>
                        <p class="card-text text-muted truncate" style="font-size: 14px; text-align: left;">
                            We are looking for a person &nbsp;who is passionate about marketing and would like to manage multip…
                        </p>
                        <div class="card-badges">
                            <span class="badge badge-soft-success">Full Time</span>
                            <span class="badge badge-soft-success"> 2-4 Years </span>
                            <span class="badge badge-soft-success">Senior-level</span>
                        </div>
                        <div class="career-links">
                          <a href="social-media-manager/index.html" class="details-btn float-left"> See Details</a>
                          <a href="social-media-manager/apply/index.html" class="apply-btn  float-right">Apply Now</a>
                        </div>
                    </div>
                    </div>
                  </div> -->

                  <!-- <div class="col-lg-4 col-sm-6 mb-4 grid-item marketing">
                    
                    <div class="card p-4 mb-4 mb-xl-0 shadow">

                        <div class="profile bg-color-green">
                            <span> <i class="lab la-sketch"></i></span>
                          
                        </div>
                      <div class="card-body px-1 job-card-text">
                      <h5 class="card-title font-size-16">SEO Specialist</h5>
                        <p class="card-text text-muted truncate" style="font-size: 14px; text-align: left;">
                            We are looking for a person who is a seasoned SEO specialist, a team player who has in-depth domain…
                        </p>
                        <div class="card-badges">
                            <span class="badge badge-soft-success">Full Time</span>
                            <span class="badge badge-soft-success"> 3-5 Years </span>
                            <span class="badge badge-soft-success">Mid-level</span>
                        </div>
                        <div class="career-links">
                          <a href="seo-specialist/index.html" class="details-btn float-left"> See Details</a>
                          <a href="seo-specialist/apply/index.html" class="apply-btn  float-right">Apply Now</a>
                        </div>
                    </div>
                    </div>
                  </div> -->
  
             </div>
          </div>
      </div>
  </div>
</section>

@endsection







  

  

