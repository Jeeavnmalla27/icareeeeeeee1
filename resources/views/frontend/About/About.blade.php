@extends('frontend.layouts.navmain')
@section('title')
About Us
@endsection
@section('main-container')


<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home "></i> Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->

<section id="about" class="about mt-5 mb-5" style="position: relative;overflow: hidden;">
    <div class="container">
  
      <div class="section-title">
        <h2>Information Care</h2>
      </div>
  
      <div class="row content">
        <div class="col-lg-6">
         
          <div>
            <h1><strong>
            {{$about[0]->title}}
            </strong></h1><br>
              <p>
                
              {!!$about[0]->content!!}
              
               
              </p>
              
          </div>
          
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <div class="video-box">
          <img src="{{asset('images/about/'. $about[0]->image)}}" class="img-fluid aos-init aos-animate" alt="image" data-aos="zoom-in" style="border-radius: 8px;
    width: 400px;
    height:auto;
    margin-top: 20px;" >
         
             
          </div>
      </div>
  
        
      </div>
  
    </div>
    <div class="dots-feat">
        <img src="{{asset('frontend/Assets/static/img/dots-2.png')}}" alt="dots">
    </div>
    <div class="cercil"></div>
  </section>
@endsection
