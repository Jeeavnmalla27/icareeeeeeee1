
@extends('frontend.layouts.navmain')
@section('title')
FAQ
@endsection
@section('main-container')

  

<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center" >
   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Frequently Asked Questions</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->



<section id="faq" class="faq " style="padding-top: 120px; ">
    <div class="container pb-2">

      <div class="section-title">
        <h2>FAQs</h2>
    
      </div>
      @foreach($frequent as $frequent)
      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"> {{$frequent->question}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse" data-parent=".faq-list">
              <p> {!!$frequent->answers!!} </p>
            </div>
          </li>

      </div>
      @endforeach

    </div>
  </section>

  @endsection



  

  


