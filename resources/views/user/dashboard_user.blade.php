<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashdoard</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url("assets/img/favicon.png")}}" rel="icon">
  <link href="{{url("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{url("assets/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
  <link href="{{url("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{url("assets/vendor/venobox/venobox.css")}}" rel="stylesheet">
  <link href="{{url("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
  <link href="{{url("assets/vendor/aos/aos.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url("assets/css/style_.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{url("assets/img/testimonials/testimonials-2.jpg")}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Nama Saya</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="/"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#dashboard"><i class="bx bx-user"></i> <span>Dashdoard</span></a></li>
          <li><a href="#"><i class="bx bx-log-out"></i> <span>Keluar</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Hallo Mahasiswa</h1>
      <p>AKPER GSH <span class="typed" data-typed-items="Semangat, Tekun, Cerdas, Maju"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= dashboard Section ======= -->
    <section id="dashboard" class="about">
      <div class="container">

        <div class="section-title">
          <h2>AKPER GSH</h2>
        </div>

        <div class="row px-5">
            <div class="container bg-light py-4 shadow-sm" data-aos="fade-right">
                <h3>Tahapan</h3>
                <form action="">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tahap_1" disabled>
                        <label class="custom-control-label" for="tahap_1"><del>Regestrasi</del></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tahap_2" disabled>
                        <label class="custom-control-label" for="tahap_2"><a href="#"  data-toggle="modal" data-target="#upload_bukti_tf">Aktivasi akun dengan upload bukti tranfer</a></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tahap_3" disabled>
                        <label class="custom-control-label" for="tahap_3"><a href="test">Ambil test</a></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tahap_4" disabled>
                        <label class="custom-control-label" for="tahap_4">Selsai</label>
                    </div>
                </form>
            </div>
            <div class="container bg-light my-3 py-4 shadow-sm" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url("assets/img/profile-img.jpg")}}" class="img-thumbnail img-fluid w-75 mx-5 my-3" alt="foto"><br>
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#upload_bukti_tf" style="padding-left:100px;padding-right:100px;">Aktivasi Akun</button>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url("assets/img/profile-img.jpg")}}" class="img-thumbnail img-fluid w-75 mx-5 my-3" alt="foto"><br>
                        <button class="btn btn-primary btn-block" style="padding-left:100px;padding-right:100px;">Ambil Test</button>
                    </div>
                </div>
            </div>
            <div class="container bg-light my-3 py-4 shadow-sm d-block" data-aos="fade-left">
                <div class="container d-flex justify-content-center">
                    <img src="{{url("assets/img/profile-img.jpg")}}" class="img-thumbnail img-fluid w-50 mx-auto my-3" alt="foto"><br>
                </div>
                <button class="btn btn-primary btn-block" type="submit" style="padding-left:100px;padding-right:100px;">Ambil Test</button>
            </div>
            <div class="container bg-light my-3 py-4 shadow-sm" data-aos="fade-left">
                <h3>Status</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nihil odit, blanditiis eveniet deleniti dolore totam cumque ab eum sit fuga delectus ipsa, saepe vero nesciunt debitis officia quibusdam rerum?</p>
            </div>
        </div>
      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AKPER GSH</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

<!-- Modal -->
=======
<<<<<<< HEAD
@extends('user/layout/main')
@section('title','Dashboard')

@section('container')
    <div class="container">
        <h1>Dashboard AKPER GSH</h1>
        <hr>
        <div class="row">
            <div class="col-md-2 bg-light shadow-sm" style="height:500px;">
                <div class="container p-4 justify-content-center d-block">
                    <img src="..." alt="foto" class="img-thumbnail m-4">
                    <h5>Nama Saya</h5>
                    <a href="#">Dashboard</a>
                    <a href="#">Keluar</a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="container bg-light py-4 shadow-sm">
                    <h3>Tahapan</h3>
                    <form action="">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="tahap_1" disabled>
                            <label class="custom-control-label" for="tahap_1"><del>Regestrasi</del></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="tahap_2" disabled>
                            <label class="custom-control-label" for="tahap_2"><a href="#"  data-toggle="modal" data-target="#upload_bukti_tf">Aktivasi akun dengan upload bukti tranfer</a></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="tahap_3" disabled>
                            <label class="custom-control-label" for="tahap_3"><a href="test">Ambil test</a></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="tahap_4" disabled>
                            <label class="custom-control-label" for="tahap_4">Selsai</label>
                        </div>
                    </form>
                </div>
                <div class="container bg-light my-3 py-4 shadow-sm">
                    <h3>Status</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nihil odit, blanditiis eveniet deleniti dolore totam cumque ab eum sit fuga delectus ipsa, saepe vero nesciunt debitis officia quibusdam rerum?</p>
                </div>
                <div class="container bg-light my-3 py-4 shadow-sm d-block">
                    <img src="" alt="foto"><br>
                    <button class="btn btn-primary" type="submit" style="padding-left:100px;padding-right:100px;">Ambil Test</button>
                </div>
                <div class="container bg-light my-3 py-4 shadow-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" class="img-thumbnail" alt="foto"><br>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#upload_bukti_tf" style="padding-left:100px;padding-right:100px;">Aktivasi Akun</button>
                        </div>
                        <div class="col-md-6">
                            <img src="" class="img-thumbnail" alt="foto"><br>
                            <button class="btn btn-primary" style="padding-left:100px;padding-right:100px;">Ambil Test</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
<div class="modal fade" id="upload_bukti_tf" tabindex="-1" role="dialog" aria-labelledby="upload" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="upload">Upload Bukti TF regestrasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="">
<<<<<<< HEAD
                <img src="{{url("assets/img/profile-img.jpg")}}" class="img-fluid img-thumbnail w-75 mx-5" alt="Foto bukti TF">
=======
                <img src="..." class="img-fluid" alt="Foto bukti TF">
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
                <div class="custom-file my-3">
                    <input type="file" class="custom-file-input" id="foto_bukti_tf">
                    <label class="custom-file-label" for="foto_bukti_tf">Upload Bukti TF</label>
                </div>
<<<<<<< HEAD
                <button class="btn btn-primary btn-block" type="submit">Upload</button>
=======
                <button class="btn btn-primary" type="submit">Upload</button>
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
            </form>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD




  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url("assets/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{url("assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
  <script src="{{url("assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{url("assets/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
  <script src="{{url("assets/vendor/counterup/counterup.min.js")}}"></script>
  <script src="{{url("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{url("assets/vendor/venobox/venobox.min.js")}}"></script>
  <script src="{{url("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
  <script src="{{url("assets/vendor/typed.js/typed.min.js")}}"></script>
  <script src="{{url("assets/vendor/aos/aos.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url("assets/js/main_.js")}}"></script>

</body>

</html>
=======
@endsection
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    dashboard user
</body>

</html>
>>>>>>> f0c853123e7111990090e7940f204a2181a14de3
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
