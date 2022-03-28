
@extends('frontend.layouts.navmain')
@section('title')
Contact
@endsection
@section('main-container')


<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home "></i> Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->
<!-- contact details -->
<section class="pt-5">
    <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-card" data-aos="zoom-in-up">

                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <div class="contact-text">
                            <h5 class="py-2 font-weight-bold text-info">Address</h5> 
                            
                            <p class="py-2">
                                
                            {{$company->street_name}}-<br>{{$company->postal_code}}<br>
                            {{$company->district}},{{$company->country}}
                        
                            </p>   
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card" data-aos="zoom-in">

                        <i class="fas fa-phone-volume contact-icon"></i>
                        <div class="contact-text">
                            <h5 class="py-2 font-weight-bold text-info">Contact</h5> 
                            <p class="py-2">
                              +977-{{$company->phone_number}}<br><br> 
                            </p>  <br>  
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card" data-aos="zoom-in-down">

                        <i class="fas fa-at contact-icon"></i>
                        <div class="contact-text">
                            <h5 class="py-2 font-weight-bold text-info">Email</h5> 
                            <p class="py-2">
                              {{$company->email}}<br><br>
                            </p>    <br>
                        </div>
                </div>
            </div>
        </div>
    </div>
  
</section>



 <!-- contact details -->
<!-- Form Section -->
<section class="" style="position: relative;z-index: 1;padding-top: 120px;" data-aos="fade-up" data-aos-duration="2000">
<div class="container pb-2">
 
@if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>@endif
    <div class="sebscribe-items wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
   
        <div class="row">
            <div class="col-lg-6 offset-lg-3 form">
                <h4 class="text-center" >
                  Fill out the form below and <span style="color:#01b0f8 ;">iCare</span> <br>
                   team member will get in contact with you.
                </h2>
                
            </div>
        </div>
            
            <div class="row">   
           
                <form class="contact-form row" action="{{route('contact.save')}}" method="POST">@csrf
                    <input type="hidden" name="csrfmiddlewaretoken" value="kvZZV7HXSZTitVbjo1Df99MrFGtJoHDIn3USc3hnNKX24ynZWgINqije7Bi8edQu">
                    <div class="form-field col-lg-12">
                       <input id="name" name="name"  class="input-text js-input" type="text" required>
                       <label class="label" for="name">Full Name</label>
                    </div>
                    
                  
                    <div class="form-field col-lg-6 ">
                      <input id="email" name="email"  class="input-text js-input" type="email" required>
                      <label class="label" for="email">E-mail</label>
                   </div>
                     <div class="form-field col-lg-6 ">
                       <input id="phone" name="phone"  class="input-text js-input" type="number" maxlength="15" required>
                       <label class="label" for="phone">Contact Number</label>
                    </div>
                   
                    <div class="form-field col-lg-12 ">
                      <textarea id="message" name="message" rows="2" required style="border: 1px solid white;"></textarea>
                      <label class="label" for="message">Message</label>
                   </div>
                    
                    <div class="form-field col-lg-12 text-center">
                       <button class="hello-btn-two" type="submit"> Submit <i class="fas fa-arrow-right fa-fw"></i></button>
                    </div>
                 </form>
            
        </div>
    </div>
</div>
</section>
<!-- Form Section -->
<div class="col-sm-12">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.432364501968!2d85.31023452703919!3d27.69516563086877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ac7c7c0e35%3A0x5d153025334f3c1e!2sTripureshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1641810380069!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection




  

  

