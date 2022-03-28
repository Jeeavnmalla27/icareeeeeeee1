
@extends('frontend.layouts.navmain')

@section('title')
Services
@endsection

@section('main-container')

  


<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center" >
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Services</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->

<!-- Services we offer -->
<section class="" style="padding: 120px 0;">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
        <h2 style="text-transform: capitalize;">Our <span style="color:#01b0f8;">Services</span></h2>
      </div>

    <div class="container">
        <div class="row">
        @foreach($serv as$service)
            <div class="col-md-4" data-aos="fade-up"  data-aos-duration="2000">
                <div class="services-card">
                          <div class="services-card-icon">
                            <a href="#"><img alt="Customer Software Development"  src="{{asset('storage/images/services')}}/{{$service->image}}" class="img-fluid mb-3"></a></img>
                        </div>      
                        <!-- <i class="fas fa-map-marker-alt contact-icon"></i> -->
                        <div class="services-card-text">
                            <h5 class="py-2 font-weight-bold"><a href="{{route('frontend.service.service' ,['id'=>$service->id])}}"></a>{{$service->title}}</h5> 
                            <p>
                            <a href="{{route('frontend.service.service' ,['id'=>$service->id])}}"></a>
                         
                         {!!Str::limit($service->description, 100, $end='...')!!}
                            </p>   
                        </div>
                </div>
            </div>
            @endforeach

    
      </div>
    </div>
</section>
<!-- Services we offer -->

@endsection



  

  


  