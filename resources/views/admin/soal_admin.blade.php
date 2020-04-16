@extends('admin.master.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Soal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Soal</li>
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
            <div class="div">
              <div class="row">
                <div class="col-11">
                  <h3 class="card-title">Data Soal Kebidanan</h3>
                </div>
                <div class="col-1-sm">
                  <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#tambahsoal">Tambah</button>
                </div>
              </div>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="container">
              @foreach($soals as $key => $soal)
              <div>
                <div class="row">
                  <!-- SOAL -->
                  <div class="col-10">
                    <h5>{{ $soal->id }}. {{ $soal->pertanyaan}} ?</h5>
                  </div>
                  <!-- AKSI -->
                  <div class="col-2 justify-content-end">
                    <span class="mx-2" data-toggle="tooltip" data-placement="bottom" title="Edit"><i style="color: #17a2b8; cursor:pointer;" class="fas fa-edit" data-toggle="modal" data-target="#editsoal-{{ $soal->id }}"></i></span>
                    <span data-toggle="tooltip" data-placement="bottom" title="Hapus">
                      <a href="{{ route('delete.soal', ['id' => $soal->id]) }}" onclick="return confirm('Are you sure?')">
                        <i style="color: #DC3544;cursor:pointer;" class="fas fa-trash"></i>
                      </a>
                    </span>
                  </div>
                </div>
                <!-- JAWABAN -->
                <div class="row">
                  <div class="col-12">
                    <ol type="a">
                      <li>{{ $soal->option_1 }}</li>
                      <li>{{ $soal->option_2 }}</li>
                      <li>{{ $soal->option_3 }}</li>
                      <li>{{ $soal->option_4 }}</li>
                      <li>{{ $soal->option_5 }}</li>
                    </ol>
                  </div>
                </div>
                <span>jawaban :<strong>{{ $soal->jawaban }}</strong></span>
                <hr>
              </div>

              <!-- Modal UPDATE -->
              <div class="modal fade bd-example-modal-lg" id="editsoal-{{ $soal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Soal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('update.soal',['id'=>$soal->id]) }}" method="POST" class="row">
                        {{ csrf_field() }}
                        <textarea name="pertanyaan" class="form-control" id="" cols="30" placeholder="Masukkan pertanyaan disini" rows="5">{{ $soal->pertanyaan }}</textarea>
                        <div class="col-6">
                          <input value="{{ $soal->option_1 }}" class="form-control my-1" type="text" placeholder="Jawaban opsi a " name="option_1" id="option_1">
                          <input value="{{ $soal->option_2 }}" class="form-control my-1" type="text" placeholder="Jawaban opsi b " name="option_2" id="option_2">
                          <input value="{{ $soal->option_3 }}" class="form-control my-1" type="text" placeholder="Jawaban opsi c " name="option_3" id="option_3">
                        </div>
                        <div class="col-6">
                          <input value="{{ $soal->option_4 }}" class="form-control my-1" type="text" placeholder="Jawaban opsi d " name="option_4" id="option_4">
                          <input value="{{ $soal->option_5 }}" class="form-control my-1" type="text" placeholder="Jawaban opsi e " name="option_5" id="option_5">
                        </div>
                        <select name="jawaban" id="jawaban" class="form-control">
                          <option {{ ("option_1" == $soal->jawaban ) ? 'selected' : '' }} value="option_1">opsi a</option>
                          <option {{ ("option_2" == $soal->jawaban ) ? 'selected' : '' }} value="option_2">opsi b</option>
                          <option {{ ("option_3" == $soal->jawaban ) ? 'selected' : '' }} value="option_3">opsi c</option>
                          <option {{ ("option_4" == $soal->jawaban ) ? 'selected' : '' }} value="option_4">opsi d</option>
                          <option {{ ("option_5" == $soal->jawaban ) ? 'selected' : '' }} value="option_5">opsi e</option>
                        </select>
                        <button type="submit" class="btn btn-info btn-block mt-3">UPDATE</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- PAGINATION HERE -->
              {{$soals}}

              <!-- Modal TAMBAH DATA-->
              <div class="modal fade bd-example-modal-lg" id="tambahsoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('create.soal') }}" method="POST" class="row">
                        {{ csrf_field() }}
                        <textarea name="pertanyaan" class="form-control" id="" cols="30" placeholder="Masukkan pertanyaan disini" rows="5"></textarea>
                        <div class="col-6">
                          <input class="form-control my-1" type="text" placeholder="Jawaban opsi a " name="option_1" id="option_1">
                          <input class="form-control my-1" type="text" placeholder="Jawaban opsi b " name="option_2" id="option_2">
                          <input class="form-control my-1" type="text" placeholder="Jawaban opsi c " name="option_3" id="option_3">
                        </div>
                        <div class="col-6">
                          <input class="form-control my-1" type="text" placeholder="Jawaban opsi d " name="option_4" id="option_4">
                          <input class="form-control my-1" type="text" placeholder="Jawaban opsi e " name="option_5" id="option_5">
                        </div>
                        <select name="jawaban" id="jawaban" class="form-control">
                          <option value="option_1">opsi a</option>
                          <option value="option_2">opsi b</option>
                          <option value="option_3">opsi c</option>
                          <option value="option_4">opsi d</option>
                          <option value="option_5">opsi e</option>
                        </select>
                        <button type="submit" class="btn btn-info btn-block mt-3">Tambah</button>
                      </form>
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