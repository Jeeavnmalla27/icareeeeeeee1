
@extends('frontend.layouts.navmain')
@section('title')
Privacy
@endsection
@section('main-container')


  

<section class="" style="position: relative;z-index: 1;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title" style="padding-bottom: 58px;padding-top: 20px;">
          <h2>Privacy Policy</h2>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="privacy-policy px-4" style="margin-top: -100px; ">
  <div class="container pb-2">
    <div class="row">
      <div class="col-lg-12 pl-0">
        <ul id="points">

          <div class="jumbotron shadow"
            style="line-height: 2; padding-left: 3rem;border-left: 5px solid #0e99da;background-color: #f8f9fa;">

            <div class="entry-content">
              <p>
                {!!$privacy[0]->content!!}
              </p>
               
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection


  

  