@extends('user/layout/main')
@section('title','Test')

@section('container')
<div class="container">
  <h1>Test AKPER GSH</h1>
  <hr>
</div>
<div class="container bg-light rounded my-3">

  @foreach($soals as $no => $soal)
  <div class="row d-block p-3">
    <h5 id="{{ $soal->id }}" class="pertanyaan">{{ $no+1 }}.{{ $soal->pertanyaan }}?</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="opsi-soal-{{ $soal->id }}" data-option="1" id="soal-{{$soal->id}}-option_1" value="option_1">
      <label class="form-check-label" for="pilihan_1">
        {{$soal->option_1}}
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="opsi-soal-{{ $soal->id }}" data-option="2" id="soal-{{$soal->id}}-option_2" value="option_2">
      <label class="form-check-label" for="pilihan_2">
        {{$soal->option_2}}
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="opsi-soal-{{ $soal->id }}" data-option="3" id="soal-{{$soal->id}}-option_3" value="option_3">
      <label class="form-check-label" for="pilihan_3">
        {{$soal->option_3}}
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="opsi-soal-{{ $soal->id }}" data-option="4" id="soal-{{$soal->id}}-option_4" value="option_4">
      <label class="form-check-label" for="pilihan_4">
        {{$soal->option_4}}
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="opsi-soal-{{ $soal->id }}" data-option="5" id="soal-{{$soal->id}}-option_5" value="option_5">
      <label class="form-check-label" for="pilihan_5">
        {{$soal->option_5}}
      </label>
    </div>
  </div>
  @endforeach

  <button onclick="submitTest()" id="submitButton" class="btn btn-danger btn-block">Kumpulkan</button>
  <script>
    var arrayOfRequest = []

    function pushArray(id, jawaban) {
      arrayOfRequest.push({
        id: id,
        jawaban: jawaban
      })
    }

    function submitTest() {
      let pertanyaan = document.getElementsByClassName("pertanyaan")
      let length = pertanyaan.length
      arrayOfRequest = [];

      for (let i = 0; i < length; i++) {
        console.log('object :', pertanyaan[i].id);
        if (document.getElementById(`soal-${pertanyaan[i].id}-option_1`).checked) {
          pushArray(pertanyaan[i].id, 'option_1')
        } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_2`).checked) {
          pushArray(pertanyaan[i].id, 'option_2')
        } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_3`).checked) {
          pushArray(pertanyaan[i].id, 'option_3')
        } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_4`).checked) {
          pushArray(pertanyaan[i].id, 'option_4')
        } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_5`).checked) {
          pushArray(pertanyaan[i].id, 'option_5')
        } else {
          pushArray(pertanyaan[i].id, '')
        }
      }
      let c = confirm("apakah anda sudah yakin ?")
      if (c) {
        let opt = {
          method: 'POST',
          body: JSON.stringify(arrayOfRequest),
          headers: {
            'Content-Type': 'application/json'
          }
        }
        fetch('{{ url("api/user/koreksi/test") }}', opt)
          .then(r => {
            if (r.ok) {
              return r.json()
            }
          })
          .then(data => console.log(data.score))
      }


    }
  </script>
</div>
@endsection