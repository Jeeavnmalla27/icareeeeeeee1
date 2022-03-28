<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PWDSMCP');</script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  
    <title>@yield('title')|iCare</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    

  <!-- FAVICON FILES -->
  <link href="{{asset('frontend/Assets/static/images/logo/favicon.png')}}" rel="icon">
  
  
  <!-- ---lindedin og meta tag--- -->

  <meta property='og:title' content='Grow My Business'/>
  <meta property='og:description' content='ExMyB is Nepal’s  B2B Service Procurement Platform.'/>
  <meta property='og:url' content='https://www.iCare.com/'/>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/Assets/static/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('frontend/Assets/static/css/main/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/Assets/static/css/main/detail.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/AAjax/ajax/libs/font-awesome/5.11.2/css/all.min.css')}}"/>


  <style>
   html {
  scroll-behavior: smooth;
}
    .hero-content{
      margin-bottom: 4rem;
    }
    .hero-content h1{
      font-size: 64px;
      font-weight: 700;
      line-height: 56px;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .title h2{
      font-size: 34px;
      font-weight: 600;
      line-height: 1.3em;
      text-align: center;
      margin-bottom: 2rem;
    }
    .img-wrap{
      position: relative;
    }
    .img-vector{
      position: absolute;
      bottom: -25px;
      right: 100px;
      z-index: -1;
    }
    .img-block{
      padding: 0px;
      margin-bottom: 30px;
      
      }
      .img-block img{
        border-radius: 40px 40px 240px 40px;
        margin:0 auto;
        display: block;
      }

 
.filtering {
    margin-bottom: 40px;
}
.filtering span {
    border-bottom: 2px solid transparent;
    color: #282b2d;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-right: 20px;
    display: inline-block;
    margin-bottom: 5px;
}
.filtering span:last-child {
    margin: 0;
}
.filtering .active {
  border-color: #05ddec;
    color: #0eebeb;
}
.portfolio-wrapper {
    position: relative;
    overflow: hidden;
}
.portfolio-overlay {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    transition: all 500ms ease;
}
.portfolio-wrapper .portfolio-image img {
    transform: scale(1.2);
    will-change: transform;
    transition: all 0.5s ease;
    width: 100%;
}
.portfolio-wrapper:hover .portfolio-image img {
    transform: none;
}
.portfolio-overlay:before {
    position: absolute;
    display: inline-block;
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    border: 1px solid rgba(0, 0, 0, 0.36);
    content: "";
    opacity: 0;
    transition: all 0.5s ease;
    transform: scale(0.85);
}
.portfolio-overlay .portfolio-content {
    position: absolute;
    bottom: 50%;
    left: 0;
    width: 100%;
    text-align: center;
    opacity: 0;
    padding: 0 35px;
}
.portfolio-content h4 {
    color: #000;
    font-weight: 600;
    font-size: 20px;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 15px;
}
.portfolio-content p {
    color: #000;
    font-weight: 500;
    letter-spacing: 1px;
    margin-bottom: 0;
}
.portfolio-content > a {
    line-height: 42px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: #000;
    display: inline-block;
    text-align: center;
    margin-bottom: 15px;
    font-weight: 800;
}
.portfolio-wrapper:hover .portfolio-overlay {
    background-color: rgba(2, 207, 222, 0.85);
}
.portfolio-wrapper:hover .portfolio-overlay:before {
    opacity: 1;
    visibility: visible;
    transform: none;
}
.portfolio-wrapper:hover .portfolio-overlay .portfolio-content {
    transform: translateY(50%);
    transition: transform 0.5s ease;
    opacity: 1;
}
@media screen and (max-width: 1199px) {
    .portfolio-content h4 {
        font-size: 18px;
    }
}
@media screen and (max-width: 991px) {
    .portfolio-content h4 {
        margin-bottom: 10px;
    }
    .portfolio-content p {
        font-size: 15px;
    }
    .portfolio-content > a {
        margin-bottom: 10px;
    }
}
@media screen and (max-width: 767px) {
    .portfolio-content h4 {
        font-size: 17px;
    }
    .portfolio-content p {
        font-size: 14px;
    }
}
@media screen and (max-width: 575px) {
    .portfolio-content h4 {
        font-size: 16px;
    }
}
.grid .grid-item {
    position: relative;
    overflow: hidden;
}
.grid .grid-item .portfolio-wrapper {
    position: relative;
    overflow: hidden;
}
.grid .grid-item .portfolio-overlay {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    transition: all 500ms ease;
}
.grid .grid-item .portfolio-wrapper .portfolio-image img {
    transform: none;
    will-change: transform;
    transition: none;
    width: 100%;
}
.grid .grid-item .portfolio-wrapper:hover .portfolio-image img {
    transform: none;
}
.grid .grid-item .portfolio-overlay:before {
    position: absolute;
    display: inline-block;
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    border: 1px solid rgba(0, 0, 0, 0.36);
    content: "";
    opacity: 0;
    transition: all 0.5s ease;
    transform: scale(0.85);
}
.grid .grid-item .portfolio-overlay .portfolio-content {
    position: absolute;
    bottom: 50%;
    left: 0;
    width: 100%;
    text-align: center;
    opacity: 0;
}
.grid .grid-item .portfolio-content h4 {
    color: #000;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 20px;
    margin-bottom: 10px;
}
.grid .grid-item .portfolio-content p {
    color: #000;
    font-weight: 500;
    letter-spacing: 1px;
    margin-bottom: 0;
}
.grid .grid-item .portfolio-content a {
    line-height: 36px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #000;
    display: inline-block;
    text-align: center;
    margin-bottom: 10px;
    font-weight: 800;
}
.grid .grid-item .portfolio-wrapper:hover .portfolio-overlay {
    background-color: rgba(2, 215, 222, 0.85);
}
.grid .grid-item .portfolio-wrapper:hover .portfolio-overlay:before {
    opacity: 1;
    visibility: visible;
    transform: none;
}
.grid .grid-item .portfolio-wrapper:hover .portfolio-overlay .portfolio-content {
    transform: translateY(50%);
    transition: transform 0.5s ease;
    opacity: 1;
}
@media screen and (max-width: 1199px) {
    .grid .grid-item .portfolio-content h4 {
        font-size: 18px;
    }
}
@media screen and (max-width: 991px) {
    .grid .grid-item .portfolio-content h4 {
        margin-bottom: 10px;
    }
    .grid .grid-item .portfolio-content p {
        font-size: 15px;
    }
    .grid .grid-item .portfolio-content a {
        margin-bottom: 10px;
    }
}
@media screen and (max-width: 767px) {
    .grid .grid-item .portfolio-content h4 {
        font-size: 17px;
    }
    .grid .grid-item .portfolio-content p {
        font-size: 14px;
    }
}
@media screen and (max-width: 575px) {
    .grid .grid-item .portfolio-content h4 {
        font-size: 16px;
    }
    .grid .grid-item .portfolio-overlay:before {
        top: 10px;
        right: 10px;
        bottom: 10px;
        left: 10px;
    }
}


/* -----card--- */
.card:hover{
  transform: translateY(-7px);
 
}
.card-title{
    text-align: left;
    font-size: 1.04rem;
    font-weight: 700;
    color: #4b4b5a;
}
.card-img-top{
  border-radius: 16px 16px 16px 16px;
}

.grid-item .card{
  box-shadow: 0px 0px 60px -12px rgb(0 0 0 / 9%);
    border: 0;
}
.card-info-wrapper{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  border-bottom: 1px solid #2489c4;
}
.career-links{
  margin-top: 1.5rem;
}
.profile {
    width: 5rem;
    height: 5rem;
    border-radius: 1rem;
    margin-bottom: 1rem;
    display: none;
}
.profile span{
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    height: 100%;
    font-size: 34px;
    color: #ffffff;
}
.card-badges{
    text-align: left;
}
.badge-soft-success {
    padding:.5rem;
    color: #1ab9c4;
    background: rgba(20, 148, 207, 0.1);
    font-weight: 500;
    margin-bottom: .5rem;
}
.details-btn {
    padding: 10px 20px !important;
    background: #f1f2f6;
    color: #57606f !important;
    border-radius: 5px;
    border: 2px solid #fff;
    transition: 0.5s ease;
    font-weight: 600;
    font-size: 14px;
}
.apply-btn {
    padding: 10px 20px !important;
    background: #0ea9e6;
    color: #fff !important;
    border-radius: 5px;
    border: 2px solid #fff;
    transition: 0.5s ease;
    font-weight: 600;
    font-size: 14px;
}
.truncate {
    width: 100%;
  margin: 0 0 1em 0;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical; 
}
.bg-color-pink{
    background-color: #ff6b81;
}
.bg-color-blue{
    background-color: #48dbfb;
}
.bg-color-green{
    background-color: #1dd1a1;
}
.bg-color-purple{
    background-color: #6c5ce7;
}
.bg-color-butternut{
    background-color: #ffda79;
}
.bg-color-storm-peterel{
    background-color: #c8d6e5;
}

.col-lg-4.col-sm-6.mb-4.grid-item {
    padding: 1rem;
}

.job-card-text p{
  text-align: left;
  font-size: 14px;
}


/* new page css */

.new_content .left-content{
  padding-top: 142px
}
.new_content .left-content-heading {
    font-size: 48px;
    line-height: 60px;
    color: #0f0f0f;
    font-weight: 600;
}
.new_content .sub-heading {
  margin-top: 16px;
    /* width: 400px; */
    font-style: normal;
    font-size: 20px;
    line-height: 32px;
    font-weight: 400;
    color: #333;
} 
.new_content .button {
    display: flex;
    flex-direction: row;
    justify-content: left;
}
.btn-primary-custom{
  margin-top: 32px;
    padding: 14px 24px;
    background-color: #24b9c4;
    color: #fff;
    border-radius: 8px;
    border: none;
    font-size: 18px;
  
    line-height: 24px;
}
.btn-primary-custom:hover{
  background-color: #222F3E;
  color: #fff;
}
.btn-default-custom{
  margin-top: 32px;
    margin-left: 16px;
    padding: 14px 24px;
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 8px;
    font-style: normal;
    font-size: 18px;
    line-height: 24px;
}
/* .btn-primary-custom-2{
  margin: 14px 0 14px auto;
    height: 36px;
    padding: 8px 16px;
    background: #6e43e5;
    color: #fff;
    border-radius: 4px;
    border: none;
    font-size: 14px;
} */

.culture_data {
  margin-bottom: 64px;
  font-weight: 700;
    font-style: normal;
    font-family: "OpenSauceOneBold";
    font-size: 48px;
    line-height: 60px;
    color: #0f0f0f;
}
.culture_content .culture_heading{
  font-style: normal;
    line-height: 24px;
    color: #0f0f0f;
    font-weight: 700;
    margin-bottom: 8px;
}
.culture_content .culture_data{
  font-weight: 400;
    font-size: 14px;
}
.culture-title{
  margin-bottom: 64px;
  font-weight: 600;
    font-size: 48px;
    line-height: 60px;
    color: #0f0f0f;
}

.culture_col{
  margin-bottom: 40px;
}
.journey_card {
    min-height: 200px;
}
.journey_card_heading{
  padding: 30px 24px 30px;
    font-size: 24px;
    line-height: 32px;
    font-weight: 600;
    margin: 0;
}

.journey_card_title{
  padding: 0 20px 20px 20px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    margin: 0;
}
.hiring_content .card{
  border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #f5f6f7;
    transition: background 0.3s, border 0.3s;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 10px 20px 10px 20px;
    border-radius: 25px 25px 25px 25px;
}

.hiring_content .hiring_para{
  color: #8d8d8d;
  padding: 0;
    margin: 0;
    line-height: 1;
}
.hiring_content .hiring_heading{
  color: #15224A;
  font-family: "Playfair Display", Sans-serif;
  font-size: 24px;
  font-weight: 600;
  line-height: 1.3em;
}
.hiring_btn{
  color: #FFFFFF;
    background-color: #0fe6ee;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #24b1c4;
    border-radius: 100px 100px 100px 100px;
    padding: 6px 40px;
    color: #fff !important;
}
.hiring_btn:hover{
  background-color: #000;
}

.founder .title{
    background-color: #FAE9D5;
    font-size: 20px;
    line-height: 28px;
    padding-top: 16px;
    padding-bottom: 10px;
    font-weight: bolder;
    padding-left: 10px;
    padding-right: 10px;
}
.founder .title .linkedin{
    color: #fff;
    float: right;
    width: 32px;
    height: 32px;
    background: #0073B1;
    border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.founder .social-media a {
    margin-right: 12px;
    width: 32px;
    height: 32px;
    border: 1px solid #e3e3e3;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.founder .social-media a .bxl-facebook:hover{
  color:#1877F2;
}
.founder .social-media a .bxl-linkedin:hover{
  color:#0A66C2;
}
.founder .social-media a .bxl-twitter:hover{
  color:#1DA1F2;
}

@media only screen and (max-width: 600px) {
  .new_content .left-content{
  padding-top: 25px
}
.new_content .left-content-heading {
  font-size: 30px;
    line-height: 40px;
}

section {
    padding: 30px 0;
    overflow: hidden;
}
.new_content .row{
  display: flex;
    flex-flow: column-reverse;
}
.bg-white{
  padding-bottom: 0px;
}
}
#footer svg {
    fill: #f7fafd;
}

  </style>
  <style>
   
    
     .timeline_div .flex-parent {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: 100px;
      /*width: 100%;
      height: 100%;*/
    }
    
     .timeline_div .input-flex-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 80vw;
      height: 100px;
      max-width: 1000px;
      position: relative;
      z-index: 0;
    }
    
     .timeline_div .input {
      width: 25px;
      height: 25px;
      background-color: #2C3E50;
      position: relative;
      border-radius: 50%;
    }
     .timeline_div .input:hover {
      cursor: pointer;
    }
     .timeline_div .input::before,  .timeline_div .input::after {
      content: "";
      display: block;
      position: absolute;
      z-index: -1;
      top: 50%;
      transform: translateY(-50%);
      background-color: #2C3E50;
      /*width: 4vw;
      height: 5px;
      max-width: 50px;*/
      width: 28vw;
        height: 5px;
        max-width: 100px;
    }
     .timeline_div .input::before {
      left: calc(-4vw + 12.5px);
    }
     .timeline_div .input::after {
      right: calc(-4vw + 12.5px);
    }
     .timeline_div .input.active {
      background-color: #2C3E50;
    }
     .timeline_div .input.active::before {
      background-color: #2C3E50;
    }
     .timeline_div .input.active::after {
      background-color: #AEB6BF;
    }
     .timeline_div .input.active span {
      font-weight: 700;
    }
     .timeline_div .input.active span::before {
      font-size: 13px;
    }
     .timeline_div .input.active span::after {
      font-size: 15px;
    }
     .timeline_div .input.active ~ .input, .input.active ~ .input::before, .input.active ~ .input::after {
      background-color: #AEB6BF;
    }
     .timeline_div .input span {
      width: 1px;
      height: 1px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      visibility: hidden;
    }
     .timeline_div .input span::before,  .timeline_div .input span::after {
      visibility: visible;
      position: absolute;
      left: 50%;
    }
     .timeline_div .input span::after {
      content: attr(data-year);
      top: 25px;
      transform: translateX(-50%);
      font-size: 14px;
    }
     .timeline_div .input span::before {
      content: attr(data-info);
      top: -65px;
      width: 70px;
      transform: translateX(-5px) rotateZ(-45deg);
      font-size: 12px;
      text-indent: -10px;
    }
    
    .description-flex-container {
      /*width: 80vw;
      font-weight: 400;
      font-size: 22px;*/
      margin-top: 50px;
      /* min-height: 500px; */
      /*max-width: 1000px;*/
    }
    .description-flex-container p {
      margin-top: 0;
      display: none;
    }
    .description-flex-container p.active {
      /* display: block; */
      display: flex;
    }
    
    @media (min-width: 1250px) {
       .timeline_div .input::before {
        /*left: -37.5px;*/
        left: -82.5px;
      }
    
       .timeline_div .input::after {
        /*right: -37.5px;*/
        right: -93px;
      }
    }
    @media (max-width: 850px) {
      .timeline_div .input {
        width: 17px;
        height: 17px;
      }
      .timeline_div .input::before, .timeline_div .input::after {
        height: 3px;
      }
      .timeline_div .input::before {
        left: calc(-4vw + 8.5px);
      }
      .timeline_div .input::after {
        right: calc(-4vw + 8.5px);
      }
    }
    @media (max-width: 600px) {
      .flex-parent {
        justify-content: initial;
      }
    
     .timeline_div .input-flex-container {
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        height: auto;
        margin-top: 15vh;
      }
    
       .timeline_div .input {
        width: 60px;
        height: 60px;
        margin: 0 10px 50px;
        background-color: #AEB6BF;
      }
       .timeline_div .input::before,  .timeline_div .input::after {
        content: none;
      }
       .timeline_div .input span {
        width: 100%;
        height: 100%;
        display: block;
      }
       .timeline_div .input span::before {
        top: calc(100% + 5px);
        transform: translateX(-50%);
        text-indent: 0;
        text-align: center;
      }
       .timeline_div .input span::after {
        top: 50%;
        transform: translate(-50%, -50%);
        color: #ECF0F1;
      }
    
      .timeline_div .description-flex-container {
        margin-top: 30px;
        text-align: center;
      }
    }
    /*@media (max-width: 400px) {
      body {
        min-height: 950px;
      }
    }*/
    .description-flex-container p.active span{
      display: flex;
      justify-content: space-evenly;
      align-content: center;
      align-items: center;
      font-size: 30px;
      font-weight: 600;
      min-height: 500px;
    }

    @media only screen and (max-width: 600px) {
  .description-flex-container p.active span{
  font-size: 20px;
  min-height: 80px;
  }
  .description-flex-container p.active {
      /* display: block; */
      display: flex;
      flex-direction: column;
    }
     
    .timeline_div .input-flex-container {
        margin-top: 20px !important;
      }
      .timeline_div .flex-parent {
       margin-top: 0px;
     
    }
    .btn-primary-custom {
      margin-bottom: 2rem!important;
    }
    .new_content .button {
    justify-content: center;
  }
}
/* applyform */

body{
       background:#FAFBFF;
   }
   #header {
     background: #fff;
    }

    .apply-form{
        padding-top: 5rem;
    }
    .form-body {
    padding: 30px;
    box-shadow: 0 50px 150px 0 rgb(4 73 89 / 5%);
    border-radius: 10px;
    margin-bottom: 30px;
    border: solid 1px #f3f4f7;
    background: white;
}
.form-body p {
    font-weight: 600;
    font-size: 28px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #222;
}

h5 {
    color: #222 !important;
    font-size: 1rem;
    font-weight: 600;
}
    input[type=text], input[type=password], input[type=email], input[type=tel], input[type=number], select, textarea {
    background: 0 0;
    height: auto;
    color: #232226;
    background-color: white;
    border: 1px solid #E2E4E9;
    width: 100%;
    padding: 10px 15px;
    line-height: 1.3;
    font-weight: 400;
    font-size: inherit;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    position: relative;
    -webkit-appearance: none;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%);
    -webkit-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    -o-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    outline: 0;
}
.Applying_for select{
    height: auto;
   background: 0 0 !important;
    color: #232226 !important;
    background-color: white !important;
    border: 1px solid #E2E4E9 !important;
    width: 100% !important;
    padding: 10px 15px !important;
    line-height: 1.3 !important;
    font-weight: 400 !important;
    font-size: inherit !important;
    -webkit-border-radius: 4px !important;
    border-radius: 4px !important;
    position: relative !important;
    -webkit-appearance: none !important;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%) !important;
    -webkit-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    -o-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    outline: 0 !important;
    
}
/* 
.form-body p {
    font-weight: 600;
    font-size: 20px;
    text-align: center;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding-top: 20px;
    color: #222;
} */

label {
 color: #77748f;
 display: inline-block;
 margin-bottom: .5rem;
}

#footer svg {
    fill: #212529;
}
input::placeholder,select::placeholder,textarea::placeholder{
    font-weight: 400!important;
}
.uppy-size--xl .uppy-DashboardItem {
    width: calc(17% - 30px) !important;

}

.uppy-size--xl .uppy-DashboardItem-preview {
    height: 100px !important;
}
.bg-image{
/* background: url('../../../static/images/form-pattern.svg'); */
padding-top: 0;
background-color: #FAFBFF;
}
.uppy-DashboardAddFiles-info{
    display: none;
}
.uppy-Dashboard-files{
    justify-content: center;
    display: flex;
}

.custom_modal .mt-100 {
     margin-top: 100px
 }

 .custom_modal .container {
     margin-top: 200px
 }

 .custom_modal .card {
     position: relative;
     display: flex;
     width: 450px;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 4px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .custom_modal .card .card-body {
     padding: 1rem 1rem
 }

.custom_modal .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }
.custom_modal .cross {
     padding: 10px;
     color: #09a9f3;
     cursor: pointer;
     font-size: 1.5rem;
 }
 .fa-check-circle{
    font-size: 41px;
    color: #09a9f3;
 }

/* select::placeholder{
    font-weight: 400!important;
} */

.uppy-Dashboard-innerWrap{
    background-color: #fff;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%);
}
button#apply_now:focus {
    outline: none!important;
}

#required_fields_not_filled{
    list-style: none;
    display: contents;
    color: red;
  }
  .loader_img{
    position: fixed;
  z-index: 9999;
  height: 15em;
  width: 10em;
  overflow: show;
  margin: auto;
  top: -60px;
  left: 0;
  bottom: 0;
  right: 0;
  display: none;
  }
  .loader_img:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 background: -webkit-radial-gradient(rgb(20 20 20 / 25%), rgb(0 0 0 / 23%));
}
.is-sticky {
    z-index: 9999 !important;
   
}
/*
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
    background-color:#82C424;
}*/

.cloud-img{
    position: relative;
}

.cloud-img img:nth-child(1) {
    position: absolute;
    left: 0;
    right: 0px;
    top: 75px;
}
.cloud-img img:nth-child(2) {
    position: absolute;
    right: 0;
    top: 700px;
}
.cloud-img img:nth-child(3) {
    position: absolute;
    right: 0;
    top: 15px;
}
.cloud-img img:nth-child(4) {
    position: absolute;
    left: 15px;
    right: 0px;
    top: 500px;
}

.shape-img img:nth-child(1) {
    position: absolute;
    left: -22%;
    bottom: -130px;
}
.shape-img img:nth-child(2) {
    position: absolute;
    right: -22%;
    bottom: -130px;
}

@media only screen and (max-width: 600px) {
    .apply-form{padding-top: 1rem;}
    .form-body p {font-size: 24px;letter-spacing: 0;}
    label{font-size: 14px;}
    .uppy-Dashboard-inner{min-height: 100px;}
    .cloud-img,.shape-img{display: none;}

}


  </style>

 

</head>


<body>

  
 
  



<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
         <a href="/"><img src="{{asset('frontend/Assets/static/img/logo/icare_logo.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('frontend.index') }}" class="hello-btn post-project-btn ">iCare</a></li>
          <li><a href="{{ route('frontend.About.About') }}" class="hello-btn post-project-btn ">About Us</a></li>
          <li><a href="{{ route('frontend.contact.contact') }}" class="hello-btn post-project-btn ">Contact Us</a></li>
          
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
</header>
