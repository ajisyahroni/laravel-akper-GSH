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
                <img src="..." class="img-fluid" alt="Foto bukti TF">
                <div class="custom-file my-3">
                    <input type="file" class="custom-file-input" id="foto_bukti_tf">
                    <label class="custom-file-label" for="foto_bukti_tf">Upload Bukti TF</label>
                </div>
                <button class="btn btn-primary" type="submit">Upload</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
