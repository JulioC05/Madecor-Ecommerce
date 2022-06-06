<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La Económica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!--Slider-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('slider/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('slider/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('slider/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('slider/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('slider/css/icomoon.css')}}">
    @stack('styles')

  </head>
  <body>

@include('include.header')
    
@include('include.navbar')


{{--start content--}}
      @yield('content')

{{--end content--}}

<footer class="ftco-footer">
  <div class="container">
    <div class="row mb-5">
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2 logo"><a href="#">LA ECONÓMICA</span></a></h2>
          <p>Si al mundo vino, y no toma vino, ¿entonces para que vino?</p>
          <ul class="ftco-footer-social list-unstyled mt-2">
            {{-- <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li> --}}
            <li class="ftco-animate"><a href="https://www.facebook.com/LicoreriaLaEconomica"><span class="fa fa-facebook"></span></a></li>
           {{--  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li> --}}
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Mi cuenta</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Mi cuenta</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Registrarse</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Iniciar sesion</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Mi Orden</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Informacion</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Sobre Nosotros</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalogo</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contáctanos</a></li>
           {{--  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li> --}}
          </ul>
        </div>
      </div>
      {{-- <div class="col-sm-12 col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Quick Link</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
          </ul>
        </div>
      </div> --}}
      <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Preguntas?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon fa fa-map marker"></span><span class="text">Jirón los Sauce 191 VMT</span></li>
              <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+51 985886450</span></a></li>
              <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">laembajada3@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-0 py-5 bg-black">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend/js/google-map.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

<!-- Slider -->
<!-- loader -->

<script src="slider/js/aos.js"></script>
<script src="slider/js/bootstrap-datepicker.js"></script>
<script src="slider/js/main.js"></script>
<!-- Slider -->

@stack('scripts')

</body>
</html>