<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <title>Regestrasi</title>
</head>

<body>
    <header id="header">
        <div class="container d-flex">
            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/"><span>AKPER GSH</span></a></h1>
            </div>
        </div>
    </header>




    <form class="bg-light shadow-sm p-4 rounded" action="/user/view/login">
        @extends('user/layout/main')
        @section('title','Regestrasi')
        @section('container')

        <div class="container">
            <!-- BARIS -->
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
                            <option selected>Pilih salah satu</option>
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select id="agama" class="custom-select">
                            <option selected>Pilih salah satu</option>
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
                            <option selected>Pilih salah satu</option>
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
                                <label for="tinggi_badan">Tinggi Badan</label>
                                <input type="number" min="140" max="200" class="form-control" id="tinggi_badan" aria-describedby="form_data">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan</label>
                                <input type="number" min="35" max="150" class="form-control" id="berat_badan" aria-describedby="form_data">
                            </div>
                        </div>
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
                </div>
                <div class="col">
                    <h5>Data alamat asal</h5>
                    <hr>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" aria-describedby="form_data">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" aria-describedby="form_data">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" aria-describedby="form_data"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" class="form-control" id="kode_pos" aria-describedby="form_data">
                    </div>

                    <h5>Data Pendidikan</h5>
                    <hr>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <select id="pendidikan_terakhir" class="custom-select">
                            <option selected>Pilih salah satu</option>
                            <option value="SMA/IPA">SMA/IPA</option>
                            <option value="SMA/IPS">SMA/IPS</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <textarea type="text" class="form-control" id="asal_sekolah" aria-describedby="form_data"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nem">Rata - Rata NEM UN</label>
                        <input type="number" class="form-control" id="nem" aria-describedby="form_data">
                    </div>
                </div>
            </div>


            <!-- BERKAS SCAN -->
            <h5>Berkas Scan</h5>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="text-center mx-auto my-3">
                            <img id="fotoPreview" class="img-fluid rounded" src="{{ asset('/img/upload.png') }}" alt="Pas Foto">
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="pasFotoUploader">
                            <label class="custom-file-label" for="pas_foto">Upload Scan Pas Foto 3 x 4</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="text-center mx-auto my-3">
                            <img id="ijazahPreview" class="img-fluid rounded" src="{{ asset('/img/document.png') }}" alt="Ijazah">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="ijazahUploader">
                            <label id="labelIjazah" class="custom-file-label" for="ijazahUploader">Upload Scan Ijazah Legalisir</label>
                        </div>
                    </div>
                </div>
                <script>
                    // mengambil element html dengan id
                    var foto = document.getElementById("pasFotoUploader")
                    var ijazah = document.getElementById("ijazahUploader")
                    var fotoPreview = document.getElementById("fotoPreview")
                    var ijazahPreview = document.getElementById("labelIjazah")

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
                </script>
            </div>
            <div class="my-5 d-block">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="auth">
                    <label class="custom-control-label" for="auth">Saya Bersedia Mengambil test Online</label>
                </div>

                <p class="text-danger">*setelah anda melakukan registrasi harap cek email untuk informasi akun</p>
                <button class="btn btn-danger btn-block" type="submit">Registrasi</button>
            </div>
        </div>
    </form>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>AKPER GSH</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
            </div>
        </div>
    </footer>
</body>

</html>

@endsection