@extends('user/layout/main')

@section('title','Regestrasi')

@section('container')
<div class="container">
    <h3>AKPER GSH</h3>
    <hr class="my-3">
    <form class="bg-light shadow-sm p-4 rounded mb-5">
        <div class="row">
          <div class="col">
              <h5>Data Diri Pendaftar</h5>
              <hr>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="nomor_ktp">Nomor KTP</label>
                <input type="text" class="form-control" id="nomor_ktp" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tempat_lahir" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select id="agama" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="konghucu">konghucu</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select id="kewarganegaraan" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="wni">WNI</option>
                    <option value="wna">WNA</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="nomor_telp">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telp" aria-describedby="form_data">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                        <input type="text" class="form-control" id="nama_ibu_kandung" aria-describedby="form_data">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" aria-describedby="form_data">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="text" class="form-control" id="tinggi_badan" aria-describedby="form_data">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="text" class="form-control" id="berat_badan" aria-describedby="form_data">
                    </div>
                </div>
            </div>
            <h5 class="mt-5">Data alamat asal</h5>
            <hr>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" id="kota" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="kecamacan">Kecamacan</label>
                <input type="text" class="form-control" id="kecamacan" aria-describedby="form_data">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" aria-describedby="form_data"></textarea>
            </div>
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" aria-describedby="form_data">
            </div>
          </div>
          <div class="col">
              <h5>Data Pendidikan</h5>
              <hr>
              <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select id="pendidikan_terakhir" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="sarjana">S1</option>
                    <option value="slta">SLTA</option>
                    <option value="sltp">SLTP</option>
                  </select>
              </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <textarea type="text" class="form-control" id="asal_sekolah" aria-describedby="form_data"></textarea>
            </div>
            <div class="form-group">
                <label for="nem">Rata - Rata NEM UN</label>
                <input type="text" class="form-control" id="nem" aria-describedby="form_data">
            </div>
            <h5 class="mt-5">Pilih Program Studi</h5>
            <hr>
            <div class="form-group">
                <label for="pilihan_1">Pilihan 1</label>
                <select id="pilihan_1" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="perawat">Perawat</option>
                    <option value="bidan">Bidan</option>
                    <option value="web">Web</option>
                  </select>
              </div>
            <div class="form-group">
                <label for="pilihan_2">Pilihan 2</label>
                <select id="pilihan_2" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="perawat">Perawat</option>
                    <option value="bidan">Bidan</option>
                    <option value="web">Web</option>
                  </select>
              </div>
            <div class="form-group">
                <label for="pilihan_3">Pilihan 3</label>
                <select id="pilihan_3" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="perawat">Perawat</option>
                    <option value="bidan">Bidan</option>
                    <option value="web">Web</option>
                  </select>
              </div>
            <div class="form-group">
                <label for="pilihan_4">Pilihan 1</label>
                <select id="pilihan_4" class="custom-select">
                    <option selected>Pilih Salah Satu</option>
                    <option value="perawat">Perawat</option>
                    <option value="bidan">Bidan</option>
                    <option value="web">Web</option>
                  </select>
              </div>
          </div>
        </div>
        <h5>Berkas Scan</h5>
        <hr>
        <div class="row">
            <div class="col">
                <img src="..." alt="Pas Foto">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pas_foto">
                    <label class="custom-file-label" for="pas_foto">Upload Scan Pas Foto 3 x 4</label>
                </div>
            </div>
            <div class="col">
                <img src="..." alt="Foto Ijazah">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto_ijazah">
                    <label class="custom-file-label" for="foto_ijazah">Upload Scan Ijazah Legalisir</label>
                </div>
            </div>
        </div>
        <hr class="mt-4">
        <div class="row mt-5 d-block">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="auth">
                <label class="custom-control-label" for="auth">Saya Bersedia Mengambil test Online</label>
            </div>
            <p class="text-muted">*setelah anda melakukan registrasi harap cek email untuk informasi akun</p>
            <button class="btn btn-primary" type="submit">Regestrasi</button>
        </div>
      </form>
</div>
@endsection