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