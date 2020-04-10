@extends('user/layout/main')
@section('title','Test')

@section('container')
<div class="container">
    <h1>Test AKPER GSH</h1>
    <hr>
</div>
<div class="container bg-light rounded my-3">
    <form action="">
        <div class="row d-block p-3">
            <h5>Apa yang dimaksud dengan etik dasar keperawatan?</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan" id="pilihan_1" value="" checked>
                <label class="form-check-label" for="pilihan_1">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan" id="pilihan_2" value="">
                <label class="form-check-label" for="pilihan_2">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan" id="pilihan_3" value="">
                <label class="form-check-label" for="pilihan_3">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan" id="pilihan_4" value="">
                <label class="form-check-label" for="pilihan_4">
                  Kode Etik adalah ...
                </label>
            </div>
        </div>
        <div class="row d-block p-3">
            <h5>Apa tujuan dasar keperawatan?</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan_2" id="pilihan_1" value="" checked>
                <label class="form-check-label" for="pilihan_1">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan_2" id="pilihan_2" value="">
                <label class="form-check-label" for="pilihan_2">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan_2" id="pilihan_3" value="">
                <label class="form-check-label" for="pilihan_3">
                  Kode Etik adalah ...
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan_2" id="pilihan_4" value="">
                <label class="form-check-label" for="pilihan_4">
                  Kode Etik adalah ...
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5" style="padding-left:100px;padding-right:100px;">Submit</button>
    </form>
</div>
@endsection
