<<<<<<< HEAD
@extends('user/layout/main')
@section('title','Landing Page')

@section('container')
    
<div class="container">
    <h1 class="display-4">AKPER GSH</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Chrysanthemum.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="img/Hydrangeas.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/Tulips.jpg" class="d-block w-100" alt="...">
                    </div>
                      
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                
            <div class="jumbotron shadow-sm my-3">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4">Pendaftaran Mahasiswa</h1>
                        <p class="lead">
                            Selamat Datang di Website Akper GSH melalui website ini Anda 
                            dapat mendapatkan informasi Program Studi, Biaya Kuliah,
                            Beasiswa, Jadwal Kegiatan, Mendaftar secara Online
                        </p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-info btn-md px-4 float-right" href="user/view/registration" role="button">Regestrasi</a><br><br>
                        <a class="btn btn-info btn-md mt-3 float-right" style="padding-left:40px;padding-right:40px;" href="user/view/login" role="button">Login</a>
                    </div>
                </div>
              </div>
              <div class="row my-3">
                  <h2 class="mx-auto">Berita Utama</h2>
                </div>
              <div class="row">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/Chrysanthemum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                        <img src="img/Chrysanthemum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                    <div class="card" style="width: 18rem;">
                        <img src="img/Chrysanthemum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="row my-4">
                  <h2 class="mx-auto">Biaya Kuliah</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Jurusan</th>
                        <th scope="col">SPP Tetap</th>
                        <th scope="col">SPP Variabel</th>
                        <th scope="col">Pembangunan</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>

@endsection
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
>>>>>>> f0c853123e7111990090e7940f204a2181a14de3
