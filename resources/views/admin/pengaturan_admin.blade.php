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
                        <h3 class="card-title">Ganti Password </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('change.password.admin') }}" method="POST">
                            {{ csrf_field() }}
                            @if($errors->any())
                            <div class="alert alert-warning my-3" role="alert">{{$errors->first()}}</div>
                            @endif
                            <div class="form-group">
                                <label for="oldPassword">Password lama</label>
                                <input required type="password" placeholder="password lama" name="oldPassword" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">Password baru</label>
                                <input required type="password" placeholder="password baru" name="newPassword" class="form-control" id="newPassword">
                            </div>

                            <div class="form-group">
                                <label for="confirmNewPassword">Konfirmasi Password baru</label>
                                <input required type="password" placeholder="password konfirmasi" name="confirmNewPassword" class="form-control" id="confirmNewPassword">
                            </div>
                            
                            

                            <input type="submit" value="ubah" class="btn btn-success btn-block mt-5">
                        </form>
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