
@extends('admin.master.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">detail profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row container mr-5 ">
                  <div class="col-4 ml-2">
                      <img style="width: 250px;" src="../../img/me.png" alt="">
                  </div>
                  <div class="col-sm mt-3">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;" >Data Pribadi</h2>
                    <table class="mx-auto" style="width:100%;" cellpadding="7">
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Adi Yoga Prakasa</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>RT 04 Gendeng Bangunjiwo Kasihan Bantul</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>prakasa@gmail.com</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Laki-laki</td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>Semarang</td>
                      </tr>
                      <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td>04-05-1999</td>
                      </tr>
                    </table>
                    <div class="mt-4">
                      <hr>
                    </div>
              </div>
              </div>
                <div class="row container mr-5 ">
                  <div class="col-4">
                      {{-- <img style="width: 250px;" src="../../img/me.png" alt=""> --}}
                  </div>
                  <div class="col-sm">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;" >Data Sekolah</h2>
                    <table class="mx-auto" style="width:100%;" cellpadding="7">
                      <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>SMK N 1 Pajangan</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>RT 04 Manukan Sendangsari Pajangan Bantul</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>pajangan@gmail.com</td>
                      </tr>
                    </table>
                    <div align="right" class="mt-4">
                      <hr>
                      <a href="/admin/view/dashboard"><button class="btn btn-primary" >Kembali</button></a>
                    </div>
              </div>
              </div>
              <div class="row" >
                <div class="col-2">
                  </div>
                  <div class="col-10">
                    </div>
                    </div> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section> 
    <!-- /.content -->
  </div>
  @endsection

</html>

