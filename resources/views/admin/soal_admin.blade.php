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
                            <button type="button" 
                            class="btn-sm btn-primary" 
                            data-toggle="modal" 
                            data-target="#tambahsoal" >Tambah</button>
                          </div>
                      </div>
                  </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="container" >
                      <div class="row">
                          <div class="col-11 ">
                            <h5>1. Apakah Yang di maksud dengan ?</h5>
                          </div>
                          <div class="col-1-sm mb-5">
                              <div>
                                <button type="button" 
                                 class="btn-sm btn-success"
                                 data-toggle="modal" 
                                data-target="#editsoal" >edit</button>
                              </div>
                            <div class="mt-2-sm" >
                                <button  type="button"  class="btn-sm btn-danger" >hapus</button>
                            </div>
                           
                          </div>
                      </div>
               
               <div class="form-check mt-3 ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  ... adalah
                </label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  ... adalah
                </label>
              </div>
              <div class="form-check mt-3 ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  ... adalah
                </label>
              </div>
              <div class="form-check mt-3 ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  ... adalah
                </label>
              </div>
            </div>
            <div class="mt-4" >
                <hr>
            </div>
            
            <div class="row">
                <div class="col-9">
                </div>
                <div class="col-3-sm">
                    <div  >
                        <nav aria-label="">
                            <ul class="pagination">
                            <li class="page-item ">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
               
              <!-- Modal -->
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
                      <form>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Masukan Pertanyaan di sini"  id="exampleFormControlTextarea1" rows="3"></textarea>
                          <div class="row mt-5 ">
                            <div class="col-1 ml--300">
                              <input type="radio" id="a" name="a" value="male">
                            </div>
                            <div class="col-4 mr-5 ">
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-1">
                              <input type="radio" id="d" name="d" value="male">
                            </div>
                            <div class="col-4">
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 4" aria-describedby="emailHelp">
                            </div>
                          </div>
                          <div class="row mt-2 ">
                            <div class="col-1 ml--300">
                              <input type="radio" id="b" name="b" value="male">
                            </div>
                            <div class="col-4 mr-5 ">
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 2" aria-describedby="emailHelp">
                            </div>
                            <div class="col-1 ml--300">
                              <input type="radio" id="e" name="e" value="male">
                            </div>
                            <div class="col-4">
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 5" aria-describedby="emailHelp">
                            </div>
                          </div>
                          <div class="row mt-2 ">
                            <div class="col-1 ml--300">
                              <input type="radio" id="c" name="c" value="male">
                            </div>
                            <div class="col-4">
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 3" aria-describedby="emailHelp">
                            </div>
                          </div>
                          <div class="form-group mt-5">
                            <label for="exampleFormControlSelect1">Jawaban yang benar</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>a</option>
                              <option>b</option>
                              <option>c</option>
                              <option>d</option>
                              <option>e</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      <div align="center" >
                          <button style="width: 300px" type="button" class="btn btn-primary">Tambah</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div> 
                          <!-- Modal -->
                          <div class="modal fade bd-example-modal-lg" id="editsoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Soal</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="form-group">
                                      <textarea class="form-control" placeholder="Masukan Pertanyaan di sini"  id="exampleFormControlTextarea1" rows="3"></textarea>
                                      <div class="row mt-5 ">
                                        <div class="col-1 ml--300">
                                          <input type="radio" id="a" name="a" value="male">
                                        </div>
                                        <div class="col-4 mr-5 ">
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-1">
                                          <input type="radio" id="d" name="d" value="male">
                                        </div>
                                        <div class="col-4">
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 4" aria-describedby="emailHelp">
                                        </div>
                                      </div>
                                      <div class="row mt-2 ">
                                        <div class="col-1 ml--300">
                                          <input type="radio" id="b" name="b" value="male">
                                        </div>
                                        <div class="col-4 mr-5 ">
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 2" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-1 ml--300">
                                          <input type="radio" id="e" name="e" value="male">
                                        </div>
                                        <div class="col-4">
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 5" aria-describedby="emailHelp">
                                        </div>
                                      </div>
                                      <div class="row mt-2 ">
                                        <div class="col-1 ml--300">
                                          <input type="radio" id="c" name="c" value="male">
                                        </div>
                                        <div class="col-4">
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tuliskan jawaban opsi 3" aria-describedby="emailHelp">
                                        </div>
                                      </div>
                                      <div class="form-group mt-5">
                                        <label for="exampleFormControlSelect1">Jawaban yang benar</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>a</option>
                                          <option>b</option>
                                          <option>c</option>
                                          <option>d</option>
                                          <option>e</option>
                                        </select>
                                      </div>
                                    </div>
                                  </form>
                                  <div align="center" >
                                      <button style="width: 300px" type="button" class="btn btn-primary">Tambah</button>
                                  </div>
                                  
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
  
