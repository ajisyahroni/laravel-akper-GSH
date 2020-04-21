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
            <h3 class="card-title">Detail Profil {{ $user->nama }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row container mr-5 ">
              <div class="col-4 ml-2">
                <img style="width: 250px;" src="{{ url($user->tf_url) }}" alt="">
                <br>
                <a target="_blank" href="{{ url($user->tf_url) }}">lihat photo profile</a>
              </div>
              <div class="col-sm mt-3">
                <h2 style="font-family: Arial, Helvetica, sans-serif;">Data Pribadi</h2>
                <table class="mx-auto" style="width:100%;" cellpadding="7">
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $user->nama }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $user->alamat }} {{ $user->kodepos }}, {{ $user->kecamatan }}, {{ $user->kota }} </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $user->email }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $user->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                  </tr>
                  <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $user->tempat_lahir }} / {{ $user->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ $user->nik }}</td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $user->agama }}</td>
                  </tr>
                  <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td>{{ $user->kewarganegaraan }}</td>
                  </tr>
                  <tr>
                    <td>Tinggi badan</td>
                    <td>:</td>
                    <td>{{ $user->tinggi_badan }} cm</td>
                  </tr>
                  <tr>
                    <td>Berat badan</td>
                    <td>:</td>
                    <td>{{ $user->berat_badan }} kg</td>
                  </tr>

                  <tr>
                    <td>Nama ibu kandung</td>
                    <td>:</td>
                    <td>{{ $user->nama_ibu_kandung }}</td>
                  </tr>

                  <tr>
                    <td>Nama ayah kandung</td>
                    <td>:</td>
                    <td>{{ $user->nama_ayah_kandung }}</td>
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
                <h2 style="font-family: Arial, Helvetica, sans-serif;">Data Sekolah</h2>
                <table class="mx-auto" style="width:100%;" cellpadding="7">
                  <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>{{ $user->sekolah_asal }}</td>
                  </tr>
                  <tr>
                    <td>Rata-rata NEM Ujian</td>
                    <td>:</td>
                    <td>{{ $user->rata_nem }}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $user->email }}</td>
                  </tr>
                  <tr>
                    <td><a download href="{{ url($user->ijazah_url) }}">Download Ijazah</a></td>
                  </tr>
                  <tr>

                    <td><a download href="{{ url($user->test_kesehatan_url) }}">Download Test kesehatan</a></td>

                  </tr>
                </table>
                <div align="right" class="mt-4">
                  <hr>
                  <a href="/admin/view/dashboard"><button class="btn btn-primary">Kembali</button></a>

                </div>
              </div>
            </div>
            <div class="row">
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