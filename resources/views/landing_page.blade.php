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