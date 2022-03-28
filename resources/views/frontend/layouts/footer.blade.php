
  <!-- Footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="{{ route('frontend.index') }}"><img src="{{asset('frontend/Assets/static/img/logo/icare_logo_white.png')}}" alt=""
                class="img-fluid"></a>
            <p>
           {{$company->street_name}}-{{$company->postal_code}}<br>
           {{$company->district}},{{$company->country}}<br>
                            
           
              <strong>Phone:+977-{{$company->phone_number}}</strong> <br>
              <strong>Email:{{$company->email}}</strong> <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="las la-angle-right"></i> <a href="{{ route('frontend.index') }}">Home</a></li>
              <li><i class="las la-angle-right"></i> <a href="{{ route('frontend.service.service') }}">Services</a></li>
              <li><i class="las la-angle-right"></i> <a href="{{ route('frontend.faq.Faq') }}">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Get Started</h4>
            <ul>
              <li><i class="las la-angle-right"></i> <a href="{{ route('frontend.contact.contact') }}">Contact Us</a></li>
              <li><i class="las la-angle-right"></i> <a href="{{ route('frontend.career.career') }}">Career</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">

              <a href="https://www.facebook.com/jeevan.malla.923" class="facebook"><i class="lab la-facebook-f"></i></a>
              <a href="https://www.instagram.com/jeevan_malla/" class="instagram"><i class="lab la-instagram"></i></a>
              <a href="https://www.linkedin.com/in/jeevan-malla-18a257202/" class="linkedin"><i class="lab la-linkedin-in"></i></a>

            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="copyright">
              Copyright © 2021 <strong>Information Care. </strong> All Rights Reserved.
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">

              <a href="{{ route('frontend.privacy.privacy') }}">Privacy Policy</a>
              <a href="{{ route('frontend.terms.terms') }}">Terms & Conditions</a>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </footer>
 








  <!-- Whatsapp Button Start -->
  <!-- <a href="https://api.whatsapp.com/send?phone=918882102246" class="wa-float wa-hide" target="_blank" id="wa-id" data-aos="fade-up" data-aos-delay="500">
    <i class="fab fa-whatsapp whatsaap-float"></i>
  </a>  -->
  <div class="whatsapp-icon">
    <a class="wa-float wa-hide" href="https://api.whatsapp.com/send?phone=+977 9843090140" target="_blank" id="wa-id"
      data-aos="fade-up" data-aos-delay="500">
      <i class="fab fa-whatsapp whatsaap-float pulse-button"></i>
    </a>
  </div>
  <!-- Whatsapp Button End -->


  <!--  JS Files -->

  <script src="{{asset('frontend/Assets/static/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/Assets/static/vendor/aos/aos.js')}}"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      autoplay: true,
      autoplayTimeout: 5000,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }


    })
  </script>






  <!-- new js -->
  <script src="{{asset('frontend/Assets/static/vendor/typewriter/typewriter.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('frontend/Assets/static/js/main/main.js')}}"></script>

  <script>
    $(window).scroll(function () {
      var header_ofset = $('#header').offset().top - $(window).scrollTop();

      if (header_ofset < 1) {
        $('#header').addClass('header-scrolled');
        $('#header .logo img').attr('src', "{{asset('frontend/Assets/static/img/logo/icare_logo.png')}}");
        $('#header ul li a').removeClass('text-white');
      }
      else {
        $('#header').removeClass('header-scrolled');
        $('#header .logo img').attr('src', "{{asset('frontend/Assets/static/img/logo/icare_logo_white.png')}}");
        $('#header ul li a').addClass('text-white ');
      }
    })

    // for whatsApp  Button
    myID = document.getElementById("wa-id");

    var myScrollFunc = function () {
      var y = window.scrollY;
      if (y >= 800) {
        myID.className = "wa-float wa-show aos-init aos-animate"
      } else {
        myID.className = "wa-float wa-hide"
      }
    };

    window.addEventListener("scroll", myScrollFunc);

  </script>
</body>
</html>