<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicon -->
  <link href="{{url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="icon">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">

  <!-- CUSTOM CSS -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

  <!-- META CSRF -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- META THEME -->
  <meta name="theme-color" content="#dc3545" />

  <!-- vendor -->
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>AKPER GSH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


    </div>
  </header><!-- End Header -->
  <!-- DYNAMIC CONTENT -->
  <section>
    @yield('container')
  </section>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AKPER GSH</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- VENDOR -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src=" {{ asset('assets/js/main.js') }}"></script>
</body>

</html>