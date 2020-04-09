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
                          <div class="col-1">
                            <button type="button" class="btn-sm btn-primary" >Tambah</button>
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
                          <div class="col-1">
                              <div>
                                <button type="button"  class="btn-sm btn-success" >edit</button>
                              </div>
                            <div class="mt-2" >
                                <button  type="button"  class="btn-sm btn-danger" >hapus</button>
                            </div>
                           
                          </div>
                      </div>
               
               <div class="form-check mt-5 ">
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
                <div class="col-3">
                    <div class="mt-5" >
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
  