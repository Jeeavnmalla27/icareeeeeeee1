@extends('frontend.layouts.main')
@section('title')
Grow Our Business
@endsection
@section('main-container')



  
  <!-- Services we offer -->
<section class=" pt-4" >
  <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2 style="text-transform: capitalize;">Our <span style="color:#01b0f8;">Services</span></h2>
    </div>

  <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme w-500">
          @foreach($service as $serve)
          <div class="item" data-aos="fade-up"  data-aos-duration="2000">
              <div class="services-card">
                        <div class="services-card-icon">
                          <img alt=""  src="{{asset('storage/images/services')}}/{{$serve->image}}" class="img-fluid">
                      </div>      
                      <!-- <i class="fas fa-map-marker-alt contact-icon"></i> -->
                      <div class="services-card-text">
                          <h5 class="py-2 font-weight-bold"><a href="{{route('frontend.index' ,['id'=>$serve->id])}}"></a>{{$serve->title}}</h5> 
                          <p><a href="{{route('frontend.index' ,['id'=>$serve->id])}}"></a>
                         
                          {!!Str::limit($serve->description, 100, $end='...')!!}
                        
                          </p>   
                      </div>
              </div>
          </div>
          @endforeach
          
      </div>
      </div>
</div>
  
    <div class="container pt-3 pb-4">
      <div class="text-center">
        <a class="hello-btn hello-cta shadow" href="{{route('frontend.service.service')}}">More Services</a>
      </div>
    </div>
    </div>
</section>


  <!--  Why Choose iCares -->
  <section id="about" class="about">
    <div class="container pt-5 pb-4">
      <div class="section-title aos-init aos-animate" data-aos="fade-up">
        <h2 style="text-transform: capitalize;">Why Choose <span style="color:#01b0f8;">iCare</span>?</h2>
        <h6>We are consistently improving ourselves to provide the best
          possible solution.
        </h6>
      </div>

      <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" data-aos="fade-right">
          <div class="video-box">
            <img src="{{asset('frontend/Assets/static/img/okk.svg')}}"
              class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
              style="border-radius: 10px;width:400px;">

            <a href="https://youtu.be/ivxHb9v0HdA"
              class="video-btn venobox btn-watch-video vbox-item play-btn" data-vbtype="video" data-autoplay="true">
              <i class="fas fa-play"></i>
            </a>

            <!-- <p>It's free and protected by an NDA</p> -->
          </div>
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 text-justify" data-aos="fade-left">
          <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate font-weight-bold"
            style="color: #01b0f8;">iCare Saves :</p>
          <div class="row counters mb-2">
            <div class="col-lg-4 col-6 text-center font-weight-bold">
              <div class="counter-wrap d-flex justify-content-center">
                <div class="counter-logo">
                  <!-- <span><i class="far fa-clock"></i></span> -->
                  <img src="{{asset('frontend/Assets/static/img/whyiCare/save-time.png')}}">
                </div>
                <div class="counter-content">
                  <span data-toggle="counter-up">50</span>%
                  <p>Time</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-6 text-center font-weight-bold">
              <div class="counter-wrap d-flex justify-content-center">
                <div class="counter-logo">
                  <!-- <span><i class="far fa-clock"></i></span> -->
                   <img src="{{asset('frontend/Assets/static/img/whyiCare/thunderbolt.png')}}">
                </div>
                <div class="counter-content">
                  <span data-toggle="counter-up">30</span>%
                  <p>Energy</p>
                </div>
              </div>
            </div>  

            <div class="col-lg-4 col-6 text-center font-weight-bold">
              <div class="counter-wrap d-flex justify-content-center">
                <div class="counter-logo">
                  <img src="{{asset('frontend/Assets/static/img/whyiCare/save-money.png')}}">
                </div>
                <div class="counter-content">
                  <span data-toggle="counter-up">40</span>%
                  <p>Money</p>
                </div>
              </div>
            </div>


          </div>
         
          <div class="row">
            <div class="col-md-12 aos-init aos-animate content" data-aos="fade-up" data-aos-delay="200">
              <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate font-weight-bold"
                style="color: #01b0f8;">iCare focuses on :</p>
              <ul>
                <li><i class="las la-check-double"></i> <b>Customized Solutions</b> -All clients’ needs are not the same, so we customize our solutions to suit the tailor-
                  made needs of our clients. We design and develop solution based on your need.
                <li><i class="las la-check-double"></i> <b>Experience Team</b> -We have delivered software application and large level of MIS to Government
                  Organization. We have experience on design and development of mission critical
                  projects. </li>
                <li><i class="las la-check-double"></i> <b>Timely Result</b> -We have a culture to value time as a highest previous thing.</li>

              </ul>
            </div>
            <!-- <div class="col-md-12 text-center ">
              <a href="#" data-toggle="modal" data-target="#myModal" class="mt-4  hello-btn hello-cta shadow"
                style="margin: 0 auto; font-weight: 500;"><i class="las la-phone-volume mr-2"></i> Book A Free
                Consultation</a>
            </div> -->
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--  What We Do Best -->
  <section class="we-do-best why-iCare" style="color: #dee2e6;position: relative;">
    <span class="element_one"><img src="{{asset('frontend/Assets/static/img/cub_four.png')}}" alt=""></span>
    <span class="element_two"><img src="{{asset('frontend/Assets/static/img/cub_four.png')}}" alt=""></span>
    <span class="element_three"><img src="{{asset('frontend/Assets/static/img/cub_three.png')}}" alt=""></span>
    <span class="element_four"><img src="{{asset('frontend/Assets/static/img/cub_three.png')}}" alt=""></span>
    <div class="container pt-3">

      <div class="section-title aos-init aos-animate" data-aos="fade-up">
        <h2 style="text-transform: capitalize; color: #ffffff;">What <span style="color:#01b0f8;"> We Used</span>?
        </h2>
        <h6>Here are some of the tools and technology that we have worked with:</h6>
      </div>

      <div class="row justify-content-between ">
      @foreach($whatweuse as $whatweuse)
        <div class="col-lg-4 service-domain">
          <div class="domain-card">
            <span class="shape"></span>
            <div class="image-container">
              <img src="{{ asset('images/images')}}/{{$whatweuse->icon}}" />
            </div>
            <div class="domain-card-name ">
              <h1 class="align-middle"><a href="{{route('frontend.index' ,['id'=>$whatweuse->id])}}"></a>{{$whatweuse->name}}</h1>
              <!-- <h3>sub line</h3> -->
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>

  <!--  process -->
  <section class="pb-0" style="margin: 60px 0;position: relative; z-index: 1;">
    <div class="shape-left-top shape opacity-default">
      <img src="{{asset('frontend/Assets/static/img/left-curve.png')}}" alt="Shape">
    </div>
    <div class="container">
      <div class="section-title aos-init aos-animate" data-aos="fade-up">
        <h2 style="text-transform: capitalize; ">Journey With<span style="color:#01b0f8;"> Information Care</span></h2>
        <h6>Whether you need website or mobile application solution, our team is always ready
          to serve you.</h6>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12" data-aos="zoom-in">
          <div class="step-img text-center">
          
          <img src="{{asset('images/journey')}}/{{$journey[0]->image}}" class="img-fluid">
        
          </div>
        </div>
        <div class="col-lg-6 col-md-12 process-sequence">
          <div class="timeline" data-step="1">
            <h4 data-aos="fade-left">Application Development</h4>
            <p data-aos="fade-left">
           {{$journey[0]->step1}}
            </p>
          </div>
          <div class="timeline" data-step="2">
            <h4 data-aos="fade-right" data-aos-delay="300">IT Consulting</h4>
            <p data-aos="fade-right" data-aos-delay="400">
           {{$journey[0]->step2}}
            </p>
          </div>
          <div class="timeline timeline-3" data-step="3">
            <h4 data-aos="fade-left" data-aos-delay="600">UI/UX Design and Development</h4>
            <p data-aos="fade-left" data-aos-delay="600">
          {{$journey[0]->step3}}
            </p>
          </div>
          <div class="timeline" data-step="4">
            <h4 data-aos="fade-right" data-aos-delay="900">API Development</h4>
            <p data-aos="fade-right" data-aos-delay="900">
            {{$journey[0]->step4}}
            </p>
          </div>
          <div class="timeline" data-step="5">
            <h4 data-aos="fade-right" data-aos-delay="1200"> Project Starts!</h4>
            <p data-aos="fade-right" data-aos-delay="1200">
            {{$journey[0]->step5}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
   
  </section>
  <!-- Our Clients -->
  <section>
    <div class="container pt-4 pb-2">

      <div class="section-title pb-0 aos-init aos-animate" data-aos="fade-up">
        <h2 style="text-transform: capitalize;">Our <span style="color:#08f7f7;"> Top Clients</span></h2>
        <h6>We work with companies of all sizes and budgets. Here are what some of them have to say:</h6>
      </div>
    </div>
    <div id="clients" class="clients my-4">
      <div class="container">
      
        <div class="row">  
      
        @foreach($topclient as $topclient) 
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <img src="{{ asset('images/topclient')}}/{{$topclient->image}}" class="img-fluid" alt="image">
          </div>
        @endforeach

         

        </div>

      </div>
    </div>
  
    <div class="gtco-testimonials" data-aos="fade-up" data-aos-anchor-placement="top-center">
   
      <div class="owl-carousel owl-carousel1 owl-theme">
         
      @foreach($testimonial as $testimonial)
          <div class="card text-center">
         
            <img class="card-img-top" src="{{ asset('images/testimonial')}}/{{$testimonial->image}}">
              
            <div class="card-body">
              <h5 class="hello-text-color"><a href="{{route('frontend.index' ,['id'=>$testimonial->id])}}"></a>{{$testimonial->name}}<br/>
                <span><a href="{{route('frontend.index' ,['id'=>$testimonial->id])}}"></a>{{$testimonial->position}}</span>
              </h5>
              <p class="card-text"><a href="{{route('frontend.index' ,['id'=>$testimonial->id])}}"></a>{!!$testimonial->description!!}</p>
         
          </div>
              
        
      
      </div>
      @endforeach 
    </div>
   
  </section>
    <!--   Get Consultatnt -->
    <section class="consultation_section ">


      <div class="container consultation_container container-md ">
        <div class="row pb-5 py-2">
          <div class="col-lg-12 col-md-12">
            <div class="card consultation_card text-center">
              <div class="img_section">
                <img src="{{asset('frontend/Assets/static/img/consultant-bg-img.png')}}" />
              </div>
              <h3 class="consulation_text">The Best Platform For Your Digital Needs!</h3>
              <p style="line-height: 31px; text-align: center;" class="col-md-9"><span class="consulation_para ">
                  Book your free consultation right now and get the best advice in a matter of just 20 minutes!
                </span></p>
                <a href="#" id="lp-pom-button-336" data-toggle="modal" data-target="#myModal" class="mt-4">Book a Free
                Consultation</a>
            </div>
          </div>
  
        </div>
      </div>
     
       <!-- Modal -->
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg p-5 pt-0 mt-0 mb-5">
          <div class="modal-content">
            <div class="contact-area-bg">
              <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                  <h3 class="consulting_title">How Can I <span style="color:#01b0f8;"> Help You</span>?</h3>
                </div>
                <div class="col-lg-6 pt-4 consulting_form">
                  <div class="contact-form ">

                    <form id="contactForm" method="POST" action="{{route('consulation.save')}}">@csrf
                     
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required="true"
                              placeholder="Full Name *">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" name="phone" id="phone_number" required="true" class="form-control"
                              placeholder="Contact Number *">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <select class="form-control" name="consulation_order" required="true">
                              <option value="" selected="">Choose your service</option>
                               @foreach($service as $jeevan)
                              <option >{{$jeevan->title}} </option>
                              @endforeach
                             
                              <option value="Other services">Other services</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center">
                          <input type="submit" value="Submit" class="btn btn-primary consultation_btn"
                            style="pointer-events: all; cursor: pointer;">

                          <!-- <div id="msgSubmit" class="h3 text-center hidden " ></div>
                                              <div class="clearfix"></div> -->
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6 text-right">

                  <img src="{{asset('frontend/Assets/static/img/popin.svg')}}" width="325px"
                    class="consulting_img_mb" />
                </div>

                <span class="" style="position: absolute; top: 20px; right: 20px;"><i class="fa fa-times"
                    data-dismiss="modal" style="cursor: pointer;"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>


 
        
    </div>
  </section>
@endsection
