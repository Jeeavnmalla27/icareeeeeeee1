@extends('frontend.layouts.navmain')
@section('title')
See Detail
@endsection
@section('main-container')


  
<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center" >
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-color: #09a9f3;background-position:left center;"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{$detail->title}}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('frontend.career.career') }}"> Careers</a></li>
                    <li class="active"> Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->


<section class="" style="padding-top: 120px; ">
    <div class="container">

      <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-md-8 career_wrap">

            <!-- Heading -->
            <h3>
              Job Description
            </h3>
            <p>
            {!!$detail->description!!}
            <p>

<p>&nbsp;</p>

             
        </div>

        <div class="col-12 col-md-4">

            
          <div class="img-block has_style1">

            <img class="img-fluid" src="{{asset('images/career/'. $detail->image)}}">

         </div>

         <div class=" block has_style1">

<!-- Heading -->
<h4 class="title font-weight-bold">
  Job Summary
</h4>
<hr/>

<div class="row">


  <div class="col-2 text-right">
    <i class="fas fa-building" aria-hidden="true" style="color: #09a9f3;"></i>
  </div>
  <div class="col-10">
    <p class="font-weight-bold">Seniority Level <br>
      <span class="font-weight-normal">{{$detail->level}}</span>
    </p>
  </div>

  
  <div class="col-2 text-right">
    <i class="fa fa-wallet" aria-hidden="true" style="color:#09a9f3;"></i>
  </div>
  <div class="col-10">
    <p class="font-weight-bold">Salary <br>
      <span class="font-weight-normal">{{$detail->salary}}</span>
    </p>
  </div>
 

  <div class="col-2 text-right">
    <i class="fas fa-award" aria-hidden="true" style="color: #09a9f3;"></i>
  </div>
  <div class="col-10">
    <p class="font-weight-bold pb-2">Experience <br>
      <span class="font-weight-normal">{{$detail->experience}}years</span>
    </p>
  </div>
   

  <div class="col-12 text-center">
    <a href="{{ route('frontend.apply') }}"  class="hello-btn post-project-btn btn-block apply-card-btn" target="blank">Apply now</a>
  </div>
  
</div>




</div>

           

        </div>

    </div>

  

    </div>
  </section>
  @endsection





  

  


 