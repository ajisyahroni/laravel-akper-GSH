@extends('user/layout/main')
@section('title','Login Pendaftar')

@section('container')

<div class="container mt-5 bg-light shadow-sm rounded">
  <form method="POST" class="text-center border border-light p-5" action="{{ route('login.user') }}">
    <p class="h4 mb-4">Login</p>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">Gagal ! {{$errors->first()}}</div>
    @endif
    {{ csrf_field() }}
    <input required name="email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
    <input required name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
    <button class="btn btn-danger btn-block my-4" type="submit">Login</button>

    <p>Belum Mendaftar?
      <a class="text-muted" href="/user/view/registration">Register</a>
    </p>

  </form>
</div>

@endsection