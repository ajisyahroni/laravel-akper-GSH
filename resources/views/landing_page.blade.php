@extends('user/layout/main')
@section('title','Akper Giri Satria Husada Wonogiri')

@section('container')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown">Selamat Datang di <span>AKPER GSH</span></h2>
              <p class="animated fadeInUp">Visi AKPER Giri Satria Husada Wonogiri adalah:
                “Menjadi Program studi penghasil tenaga perawat Vokasi yang profesional di era global dan unggul dalam bidang keahlian keperawatan dasar di tahun 2020”
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown">Sejarah <span>Akper GSH Wonogiri</span></h2>
              <p class="animated fadeInUp">Akademi Keperawatan Giri Satria Husada Wonogiri berdiri sejak tahun 1995 di Kabupaten Wonogiri dengan berlokasi di Jl. Tentara Pelajar No. 01 Joho Lor Giriwono Wonogiri. Akademi ini didirikan oleh yayasan Giri Satria Husada yang berdiri pada 09 Februari 1995 berdasarkan Akta Pendirian yayasan Nomor 20 didepan pejabat Pembuat Akta Ny. Moeslichatoen Rochaditomo, S.H.</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown">Tentang<span>Akper GSH Wonogiri</span></h2>
              <p class="animated fadeInUp">Akademi ini mendapatkan ijin sementara penyelenggaraan oleh Kemenkes Republik Indonesia pada 10 April 1995 dengan Nomor SK: HK.00.06.1.1.1121 dan diperpanjang dengan ijin perpanjangan penyelenggaraan pendidikan dari Kemenkes dengan Nomor SK: HK. 03.2.411.2685 pada bulan Juli 2005. Akademi ini mengalami alih bina dari Kementrian Kesehatan ke Kementrian Pendidikan Nasional pada 1 Februari 2007 dengan SK Kemendiknas Nomor 29/D/O/2007. Akademi Keperawatan Giri Satria merupakan satu-satunya perguruan tinggi ilmu keperawatan di Kabupaten Wonogiri.</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">
          <h1>Pendaftaran Mahasiswa</h1>
          <p>
            Selamat Datang di Website Akper GSH melalui website ini anda
            dapat mendapatkan informasi Program Studi, Biaya Kuliah,
            Beasiswa, Jadwal Kegiatan, mendaftar secara online
          </p>
        </div>
        <div class="col-lg-4 pt-4 pt-lg-0 content">
          <a href="{{ route('registration.view') }}" class="btn btn-danger float-lg-right my-lg-3 py-2" style="padding:0 50px 0 50px;">Registrasi</a>
          <a href="{{ route('login.view') }}" class="btn btn-danger float-lg-right py-2" style="padding:0 67px 0 67px;">Login</a>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Berita Utama</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <img class="img-thumbnail" style="margin-top:-60px;" src="assets/img/testimonials/testimonials-1.png" alt="">
            <h4><a href="">Ayo Lawan Virus Corona Bersama Mahasiswa Akper GSH Wonogiri Dengan #4M</a></h4>
            <p>Beberapa waktu ini, dunia sedang dihebohkan dengan suatu penyakit yang disebabkan oleh virus coronavirus. Virus...</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <img class="img-thumbnail" style="margin-top:-60px;" src="assets/img/testimonials/testimonials-2.png" alt="">
            <h4><a href="">PERSIAPAN LED dan LKPT utk akreditasi AIPT 3.0</a></h4>
            <p>Dalam rangka peningkatan mutu dan kualitas AKPER GSH Wonogiri, pada tanggal 28 Oktober 2019 pihak...</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <img class="img-thumbnail" style="margin-top:-60px;" src="assets/img/testimonials/testimonials-3.png" alt="">
            <h4><a href="">SEMINAR NASIONAL KEPERAWATAN</a></h4>
            <p>Kegiatan seminar nasional kewirausahaan dalam praktek mandiri keperawatan di akper GSH Wonogiri bersama Alumni GSH</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@endsection