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

<<<<<<< HEAD
<<<<<<< HEAD
  <div class="row d-flex justify-content-center">
  <div class="mt-5 bg-light shadow-sm rounded">
=======
  <div class="container w-50 mt-5 bg-light shadow-sm rounded">
>>>>>>> e632893ba9b4c3bb4220d4286fee70c2173f41e1
=======
  <div class="container w-50 mt-5 bg-light shadow-sm rounded">
>>>>>>> e632893ba9b4c3bb4220d4286fee70c2173f41e1
    <form class="text-center border border-light p-5" action="/user/view/dashboard">
      <p class="h4 mb-4">Login</p>

      <!-- Email -->
      <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

      <!-- Password -->
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

      <!-- Sign in button -->
      <a href="dashboard" class="btn btn-danger btn-block my-4" type="submit">Login</a>

      <!-- Register -->
      <p>Belum Mendaftar?
        <a class="text-muted" href="/user/view/registration">Register</a>
      </p>

    </form>
  </div>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
>>>>>>> e632893ba9b4c3bb4220d4286fee70c2173f41e1
=======
>>>>>>> e632893ba9b4c3bb4220d4286fee70c2173f41e1
</body>

</html>