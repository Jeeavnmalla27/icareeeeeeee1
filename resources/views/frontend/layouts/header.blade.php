<!DOCTYPE html>
<html lang="en">




<head>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PWDSMCP');</script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')|iCare</title>
  <!-- FAVICON FILES -->
  <link href="{{asset('frontend/Assets/static/images/logo/favicon.png')}}" rel="icon">
  <!-- og meta tag -->
  <meta property='og:title' content='Grow My Business' />
  <meta property='og:url' content='https://www.iCare.com/' />



  <!-- Google Fonts -->
  <!--  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/Assets/static/vendor/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/css/main/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/css/main/index.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/AAjax/ajax/libs/font-awesome/5.11.2/css/all.min.css')}}" />
  <link rel="stylesheet"
    href="{{asset('frontend/maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alphajs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    

</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">

  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('storage/video/'. $homevideo[0]->video)}}" type="video/mp4" style="opacity: 0.6;">
    </video>


    <div class="hero-container" data-aos="zoom-in">
      <h1>{{$homevideo[0]->name}}</h1>
      <!-- <h2>Instantly match with verified, expert IT agencies</h2> -->
      <h2>Find the best service provider for -
        <span class="txt-rotate" style="color:#327ab8;font-size: 36px; font-weight: bold;" data-period="2000"
          data-rotate='[ "Web Design","Website Developement", "Application Development", "Digital Marketing", "SEO" ]'></span>
      </h2>
      <a href="{{ route('frontend.contact.contact') }}" class="btn-get-started scrollto rounded">Join Us</a>

    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">

        <a href="{{ route('frontend.index') }}"><img src="{{asset('frontend/Assets/static/img/logo/icare_logo_white.png')}}" alt=""
            class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('frontend.index') }}" class="text-white hello-btn post-project-btn">iCare</a></li>
          <li><a href="{{ route('frontend.About.About') }}" class="text-white hello-btn post-project-btn">About Us</a></li>
          <li><a href="{{ route('frontend.contact.contact') }}" class="hello-btn post-project-btn ">Contact Us</a></li>



        </ul>
      </nav><!-- .nav-menu -->
      </div>
  </header>
  <!-- End Header -->