    @extends('user/layout/main')
    @section('title','Registrasi')

    @section('container')

    <form class="bg-light shadow-sm p-4 rounded" action="{{ route('register.user') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <!-- BARIS -->
            <div class="row">
                <div class="col-md-6">
                    <h5>Data Diri Pendaftar</h5>
                    <hr>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" id="nama_lengkap" aria-describedby="form_data">
                        @if($errors->has('nama'))
                        <div class="text-danger">
                            * {{$errors->first('nama')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nomor_ktp">Nomor KTP</label>
                        <input name="nik" type="text" class="form-control" id="nomor_ktp" aria-describedby="form_data">
                        @if($errors->has('nik'))
                        <div class="text-danger">
                            * {{$errors->first('nik')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="form_data">
                        @if($errors->has('tempat_lahir'))
                        <div class="text-danger">
                            * {{$errors->first('tempat_lahir')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="tempat_lahir" aria-describedby="form_data">
                        @if($errors->has('tanggal_lahir'))
                        <div class="text-danger">
                            * {{$errors->first('tanggal_lahir')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="custom-select">
                            <option selected disabled value="">Pilih</option>
                            <option value="L">Pria</option>
                            <option value="P">Wanita</option>
                        </select>
                        @if($errors->has('gender'))
                        <div class="text-danger">
                            * {{$errors->first('gender')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="custom-select">
                            <option selected disabled value="">Pilih</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="konghucu">konghucu</option>
                        </select>
                        @if($errors->has('agama'))
                        <div class="text-danger">
                            * {{$errors->first('agama')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <select name="kewarganegaraan" id="kewarganegaraan" class="custom-select">
                            <option selected disabled value="">Pilih</option>
                            <option value="wni">WNI</option>
                            <option value="wna">WNA</option>
                        </select>
                        @if($errors->has('kewarganegaraan'))
                        <div class="text-danger">
                            * {{$errors->first('kewarganegaraan')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="form_data">
                        @if($errors->has('email'))
                        <div class="text-danger">
                            * {{$errors->first('email')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nomor_telp">Nomor Telepon</label>
                        <input name="telepon" type="text" class="form-control" id="nomor_telp" aria-describedby="form_data">
                        @if($errors->has('telepon'))
                        <div class="text-danger">
                            * {{$errors->first('telepon')}}
                        </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan</label>
                                <input name="tinggi_badan" type="number" min="140" max="200" class="form-control" id="tinggi_badan" aria-describedby="form_data">
                                @if($errors->has('tinggi_badan'))
                                <div class="text-danger">
                                    * {{$errors->first('tinggi_badan')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan</label>
                                <input name="berat_badan" type="number" min="35" max="150" class="form-control" id="berat_badan" aria-describedby="form_data">
                                @if($errors->has('berat_badan'))
                                <div class="text-danger">
                                    * {{$errors->first('berat_badan')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                                <input name="nama_ibu_kandung" type="text" class="form-control" id="nama_ibu_kandung" aria-describedby="form_data">
                                @if($errors->has('nama_ibu_kandung'))
                                <div class="text-danger">
                                    * {{$errors->first('nama_ibu_kandung')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input name="nama_ayah_kandung" type="text" class="form-control" id="nama_ayah" aria-describedby="form_data">
                                @if($errors->has('nama_ayah_kandung'))
                                <div class="text-danger">
                                    * {{$errors->first('nama_ayah_kandung')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Data alamat asal</h5>
                    <hr>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input name="kota" type="text" class="form-control" id="kota" aria-describedby="form_data">
                        @if($errors->has('kota'))
                        <div class="text-danger">
                            * {{$errors->first('kota')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input name="kecamatan" type="text" class="form-control" id="kecamatan" aria-describedby="form_data">
                        @if($errors->has('kecamatan'))
                        <div class="text-danger">
                            * {{$errors->first('kecamatan')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" type="text" class="form-control" id="alamat" aria-describedby="form_data"></textarea>
                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            * {{$errors->first('alamat')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input name="kodepos" type="number" class="form-control" id="kode_pos" aria-describedby="form_data">
                        @if($errors->has('kodepos'))
                        <div class="text-danger">
                            * {{$errors->first('kodepos')}}
                        </div>
                        @endif
                    </div>

                    <h5>Data Pendidikan</h5>
                    <hr>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="custom-select">
                            <option disabled selected>Pilih salah satu</option>
                            <option value="SMA/IPA">SMA/IPA</option>
                            <option value="SMA/IPS">SMA/IPS</option>
                            <option value="SMK">SMK</option>
                        </select>
                        @if($errors->has('pendidikan_terakhir'))
                        <div class="text-danger">
                            * {{$errors->first('pendidikan_terakhir')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sekolah_asal">Asal Sekolah</label>
                        <textarea name="sekolah_asal" type="text" class="form-control" id="sekolah_asal" aria-describedby="form_data"></textarea>
                        @if($errors->has('sekolah_asal'))
                        <div class="text-danger">
                            * {{$errors->first('sekolah_asal')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nem">Rata - Rata NEM UN</label>
                        <input name="rata_nem" type="number" class="form-control" id="nem" aria-describedby="form_data">
                        @if($errors->has('rata_nem'))
                        <div class="text-danger">
                            * {{$errors->first('rata_nem')}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>


            <!-- BERKAS SCAN -->
            <h5>Berkas Scan</h5>
            <div class="row">
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="text-center mx-auto my-3">
                            <img id="fotoPreview" class="img-fluid rounded" src="{{ asset('/img/upload.png') }}" alt="Pas Foto">
                        </div>

                        <div class="custom-file">
                            <input name="foto_file" type="file" class="custom-file-input" id="pasFotoUploader">
                            <label class="custom-file-label" for="pas_foto">Scan Pas Foto 3 x 4</label>
                            @if($errors->has('foto_file'))
                            <div class="text-danger">
                                * {{$errors->first('foto_file')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="text-center mx-auto my-3">
                            <img id="ijazahPreview" class="img-fluid rounded" src="{{ asset('/img/document.png') }}" alt="Ijazah">
                        </div>
                        <div class="custom-file">
                            <input name="ijazah_file" type="file" class="custom-file-input" id="ijazahUploader">
                            <label id="labelIjazah" class="custom-file-label" for="ijazahUploader">Scan Ijazah Legalisir</label>
                            @if($errors->has('ijazah_file'))
                            <div class="text-danger">
                                * {{$errors->first('ijazah_file')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="text-center mx-auto my-3">
                            <img id="kesehatanPreview" class="img-fluid rounded" src="{{ asset('/img/document.png') }}" alt="kesehatan">
                        </div>
                        <div class="custom-file">
                            <input name="test_kesehatan_file" type="file" class="custom-file-input" id="kesehatanUploader">
                            <label id="labelKesehatan" class="custom-file-label" for="kesehatanUploader">Scan test kesehatan</label>
                            @if($errors->has('test_kesehatan_file'))
                            <div class="text-danger">
                                * {{$errors->first('test_kesehatan_file')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <script>
                    // mengambil element html dengan id
                    var foto = document.getElementById("pasFotoUploader")
                    var ijazah = document.getElementById("ijazahUploader")
                    var kesehatan = document.getElementById("kesehatanUploader")

                    var fotoPreview = document.getElementById("fotoPreview")
                    var ijazahPreview = document.getElementById("labelIjazah")
                    var kesehatanPreview = document.getElementById("labelKesehatan")

                    // membuat event onchange
                    foto.onchange = function(evt) {

                        var reader = new FileReader()
                        var file = evt.target.files[0]

                        reader.onload = function() {
                            fotoPreview.src = reader.result
                            fotoPreview.width = "300"
                            fotoPreview.height = "300"
                        }

                        reader.readAsDataURL(file)
                    }
                    ijazah.onchange = function(evt) {
                        let name = evt.target.files[0].name
                        ijazahPreview.innerHTML = name
                    }

                    kesehatan.onchange = function(evt) {
                        let name = evt.target.files[0].name
                        kesehatanPreview.innerHTML = name
                    }
                </script>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @if($errors->has('password'))
                    <div class="text-danger">
                        * {{$errors->first('password')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="confirm_password">Konfirmasi password</label>
                    <input type="password" name="password_confirmation" id="confirm_password" class="form-control">
                    @if($errors->has('password_confirmation'))
                    <div class="text-danger">
                        * {{$errors->first('password_confirmation')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="my-5 d-block">
                <div class="custom-control custom-checkbox">
                    <input onclick="changeValue(this)" name="CBT" type="checkbox" class="custom-control-input" id="auth">
                    <input name="isCBT" value="0" type="hidden" class="custom-control-input" id="hidden">
                    <script>
                        function changeValue(evt) {
                            if (evt.checked) {
                                document.getElementById("hidden").value = 1
                            } else {
                                document.getElementById("hidden").value = 0
                            }
                        }
                    </script>
                    <label class="custom-control-label" for="auth">Saya Bersedia Mengambil test Online</label>
                </div>

                <p class="text-danger">*setelah anda melakukan registrasi harap cek email untuk informasi akun</p>
                <button class="btn btn-danger btn-block" type="submit">Registrasi</button>
            </div>
        </div>
    </form>

    @endsection