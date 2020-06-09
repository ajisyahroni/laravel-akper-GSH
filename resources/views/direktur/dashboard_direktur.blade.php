@extends('direktur.master.master')
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
            <div class="float-right">
              <a onclick="printData()" href="#">cetak</a>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <table id="tableReal" class="table table-bordered table-striped">
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
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->sekolah_asal }}</td>
                  <td>{{ $user->alamat }}, {{ $user->kota }}</td>
                  <td>
                    @if ($user->hasActivated == 1)
                    aktif
                    @elseif (!isset($user->hasActivated))
                    belum
                    @else
                    ditolak
                    @endif

                    @if (isset($user->hasTested))
                    Sudah Test
                    @endif

                  </td>
                  <td class="text-center">
                    <span data-toggle="tooltip" data-placement="top" title="Lihat Detail">
                      <a href="/direktur/view/show-user/detail/id={{ $user->id }}"><i style="color: #17a2b8" class="fas fa-id-card"></i></a>
                    </span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- print script on here -->
            <script>
              function printData() {
                document.getElementsByClassName("dt-button")[0].click()
              }
            </script>
          </div>

          <div class="card-body d-none">
            <table border="1" id="tableHide" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>SMA Asal</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>NIK</th>
                  <th>NEM</th>
                  <th>agama</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->tempat_lahir }} / {{ $user->tanggal_lahir }}</td>
                  <td>{{ $user->sekolah_asal }}</td>
                  <td>{{ $user->alamat }}, {{ $user->kota }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nik }}</td>
                  <td>{{ $user->rata_nem }}</td>
                  <td>{{ $user->agama }}</td>
                  <td>
                    @if ($user->hasActivated == 1)
                    aktif
                    @elseif (!isset($user->hasActivated) && !isset($user->tf_url))
                    belum
                    @elseif (!isset($user->hasActivated) && isset($user->tf_url))
                    menunggu
                    @else
                    ditolak
                    @endif

                    @if (isset($user->hasTested))
                    Sudah Test
                    @endif
                  </td>

                </tr>

                @endforeach
              </tbody>
            </table>
            <!-- print script on here -->
            <script>
              function printData() {
                document.getElementsByClassName("dt-button")[0].click()
              }
            </script>

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