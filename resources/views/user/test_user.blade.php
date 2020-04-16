@extends('user/layout/main')
@section('title','Test')

@section('container')
<div class="container">
  <h1>Test AKPER GSH</h1>
  <hr>
</div>
<div class="container bg-light rounded my-3">
  <form action="{{ route('koreksi.user') }}" method="POST">
    @foreach($soals as $no => $soal)
    <div class="row d-block p-3">
      <h5 id="pertanyaan-{{ $soal->id }}" class="pertanyaan">{{ $no+1 }}.{{ $soal->pertanyaan }}?</h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pilihan" id="pilihan_1" value="">
        <label class="form-check-label" for="pilihan_1">
          {{$soal->option_1}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pilihan" id="pilihan_2" value="">
        <label class="form-check-label" for="pilihan_2">
          {{$soal->option_2}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pilihan" id="pilihan_3" value="">
        <label class="form-check-label" for="pilihan_3">
          {{$soal->option_3}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pilihan" id="pilihan_4" value="">
        <label class="form-check-label" for="pilihan_4">
          {{$soal->option_4}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pilihan" id="pilihan_5" value="">
        <label class="form-check-label" for="pilihan_5">
          {{$soal->option_5}}
        </label>
      </div>
    </div>
    @endforeach
  </form>
  <button onclick="submitTest()" id="submitButton" class="btn btn-danger btn-block">Kumpulkan</button>
  <script>
    function submitTest() {
      let pertanyaan = document.getElementsByClassName("pertanyaan")
      let length = pertanyaan.length

      for(let i = 0; i<length;i++){
        console.log('object :', pertanyaan[i].id);
      }

    }
  </script>
</div>
@endsection