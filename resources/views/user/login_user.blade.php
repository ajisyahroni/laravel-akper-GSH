<<<<<<< HEAD
=======
<<<<<<< HEAD
@extends('user/layout/main')

@section('title','Login')

@section('container')
<div class="container">
    <h1 class="display-3">AKPER GSH</h1>
    <hr class="my-3">
</div>
<div class="container bg-light shadow p-4 rounded my-5 w-50">
    <h1 class="display-5">Login</h1>
    <form>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Email Jangan Sampai Ada yang Tau Selain Anda</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password">
        </div>
        Belum Mendaftar?, Klik
        <a class="text-muted" href="registration">Regestrasi</a><br>
        <button type="submit" class="btn btn-primary mt-2">Login</button>
      </form>
</div>
@endsection
=======
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link href="{{url("assets/img/favicon.png")}}" rel="icon">
    <link href="{{url("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{url("assets/vendor/bootstrap/css/bootstrap.min.css")}}">
    <link href="{{url("assets/css/style.css")}}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>AKPER GSH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


    </div>
  </header><!-- End Header -->
    <div class="container w-50 mt-5 bg-light shadow-sm rounded">
        <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4">Login</p>
        
            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
        
            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
    
            <!-- Sign in button -->
            <a href="dashboard" class="btn btn-info btn-block my-4" type="submit">Login</a>
        
            <!-- Register -->
            <p>Belum Mendaftar?
                <a class="text-muted" href="">Register</a>
            </p>
        
        </form>
    </div>
    <!-- Default form login -->
<!-- Default form login -->
</body>

</html>
=======
    <title>Document</title>
</head>

<body>
    login user
</body>

</html>
>>>>>>> f0c853123e7111990090e7940f204a2181a14de3
>>>>>>> 34799583115cbbc2c6d942729742cabe6be2e426
