@extends('user/layout/main')

@section('title','Login')

@section('container')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1 class="text-light"><a href="/"><span>AKPER GSH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


    </div>
  </header><!-- End Header -->

  <div class="container w-50 mt-5 bg-light shadow-sm rounded">
    <form method="POST" class="text-center border border-light p-5" action="{{ route('login.user') }}">
      <p class="h4 mb-4">Login</p>
      {{ csrf_field() }}
      <input value="suyainah@yahoo.com" required name="email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
      <input value="secret" required name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
      <button class="btn btn-danger btn-block my-4" type="submit">Login</button>

      <p>Belum Mendaftar?
        <a class="text-muted" href="/user/view/registration">Register</a>
      </p>

    </form>
  </div>
</body>

</html>