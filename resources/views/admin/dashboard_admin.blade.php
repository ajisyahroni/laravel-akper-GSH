@extends('admin.master.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">dashboard</li>
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
            <h3 class="card-title">Data Register</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>SMA Asal</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Adi Yoga Prakasa</td>
                  <td>SMAN 1
                  </td>
                  <td>Yogyakarta</td>
                  <td> belum aktivasi</td>
                  <td class="text-center">
                    <span data-toggle="tooltip" data-placement="top" title="Cek Pendaftar">
                      <i style="color: #28a745; cursor:pointer;" class="fas fa-check-circle mr-4" data-toggle="modal" data-target="#cekbelum"></i>
                    </span>

                    <span data-toggle="tooltip" data-placement="top" title="Lihat Detail">
                      <a href="/admin/view/detail"><i style="color: #17a2b8" class="fas fa-id-card"></i></a>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="modal fade" id="cekbelum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Belum Aktifasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Bukti TF oleh Aji Syahroni:</p>
                    <div class="text-center"> <img class="img-fluid" src="../../img/photo2.png" alt=""> </div>
                  </div>
                  <div class="modal-footer">
                    <div class="row">
                      <div class="col">
                        <button type="button" class="btn btn-danger">tolak</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ceksudah" data-dismiss="modal">acc</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="ceksudah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Akun Teraktifasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p style="font-family:Arial, Helvetica, sans-serif;">anda telah mengaktivasi akun<b> Adi Yoga Prakasa</b></p>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>email :</td>
                          <td>adi@gmail.com</td>
                        </tr>
                        <tr>
                          <td>password: </td>
                          <td>akukudupiyemas</td>
                        </tr>
                      </tbody>
                    </table>
                    <p style="color:red;">*kirimkan info akun berikut ke aji</p>
                  </div>

                </div>
              </div>
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
