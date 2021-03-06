@extends('user/layout/test')
@section('title','Test Online')

@section('container')
 <!-- ======= Header ======= -->
 <header id="header">
  <div class="d-flex justify-content-between">
    <div class="logo ml-2">
      <h1 class="text-light"><a href="#"><span>AKPER GSH TEST</span></a></h1>
    </div>

    <div>
      <small>{{$waktu_mulai}}</small>
      <br>
      <small id="timer"></small>
    </div>
  </div>
</header>
<!-- End Header -->


<nav class="navbar fixed-bottom bg-white">
  <small>
    {{$soals->links()}} 
  </small>

  <div>
    <button onclick="submitTest()" id="submitButton" class="btn btn-danger btn-sm">Kumpulkan</button>
  </div>

  
</nav>

{{-- <div class="container">
  <h1>Test AKPER GSH</h1>
  <hr>
</div> --}}
<div class="container bg-light rounded my-3">

  @foreach($soals as $no => $soal)
  <div class="row d-block p-3">
    <h5 id="{{ $soal->id }}" class="pertanyaan">{{ $soals->firstItem() + $no }}. <span>{{ $soal->pertanyaan }}</span>?</h5>
    <div class="form-check">
      <input 
        onclick="saveToStorage(this)" 
        data-pertanyaan="{{ $soal->id }}"
        data-jawaban="option_1"

        data-option="1" 
        class="form-check-input" 
        type="radio" 
        name="opsi-soal-{{ $soal->id }}" 
        id="soal-{{$soal->id}}-option_1" 
        value="option_1">
      <label class="form-check-label" for="pilihan_1">
        {{$soal->option_1}}
      </label>
    </div>
    <div class="form-check">
      <input 
        onclick="saveToStorage(this)" 
        data-pertanyaan="{{ $soal->id }}"
        data-jawaban="option_2"

        class="form-check-input" 
        type="radio" 
        name="opsi-soal-{{ $soal->id }}" 
        data-option="2" 
        id="soal-{{$soal->id}}-option_2" 
        value="option_2">
      <label class="form-check-label" for="pilihan_2">
        {{$soal->option_2}}
      </label>
    </div>
    <div class="form-check">
      <input 
        onclick="saveToStorage(this)" 
        data-pertanyaan="{{ $soal->id }}"
        data-jawaban="option_3"

        class="form-check-input" 
        type="radio" 
        name="opsi-soal-{{ $soal->id }}" 
        data-option="3" 
        id="soal-{{$soal->id}}-option_3" 
        value="option_3">
      <label class="form-check-label" for="pilihan_3">
        {{$soal->option_3}}
      </label>
    </div>
    <div class="form-check">
      <input 
        onclick="saveToStorage(this)" 
        data-pertanyaan="{{ $soal->id }}"
        data-jawaban="option_4"
        class="form-check-input" 
        type="radio" 
        name="opsi-soal-{{ $soal->id }}" 
        data-option="4" 
        id="soal-{{$soal->id}}-option_4" 
        value="option_4">
      <label class="form-check-label" for="pilihan_4">
        {{$soal->option_4}}
      </label>
    </div>
    <div class="form-check">
      <input 
        onclick="saveToStorage(this)" 
        data-pertanyaan="{{ $soal->id }}"
        data-jawaban="option_5"

        class="form-check-input" 
        type="radio" 
        name="opsi-soal-{{ $soal->id }}" 
        data-option="5" 
        id="soal-{{$soal->id}}-option_5" 
        value="option_5">
      <label class="form-check-label" for="pilihan_5">
        {{$soal->option_5}}
      </label>
    </div>
  </div>
  @endforeach 

 

  {{-- lodash here --}}
  {{-- <script src="{{ asset('lodash/index.js') }}"></script> --}}
  <script>
    
    var arrayOfRequest = []
    var array_of_answer = [];
    var new_array_of_answer = [];
    (function mounted(){
      var get_array_local_storage = JSON.parse(localStorage.getItem('array_of_answer'))
      if(get_array_local_storage){
        get_array_local_storage.map(object=>{
        id = `soal-${object.id}-${object.jawaban}`;
        var elem = document.getElementById(id)
        if(elem){
          elem.checked = true
          // console.log(id)
          // console.log(elem)
        }
        
      })
      }
      

    }())

    function createObject(id_pertanyaan,id_jawaban){
      return {
        id:id_pertanyaan,
        jawaban:id_jawaban
      }
    }
    function saveToStorage(element){
      let id_pertanyaan = element.getAttribute('data-pertanyaan');
      let jawaban = element.getAttribute('data-jawaban');
      let setOption = new createObject(id_pertanyaan,jawaban);

      array_of_answer = JSON.parse(localStorage.getItem('array_of_answer'))
      
      if(array_of_answer){   
        let findSame = array_of_answer.some(item=>item.id == id_pertanyaan)
        if(!findSame){
          array_of_answer.push(setOption)
          let stringifyArray = JSON.stringify(array_of_answer)
          localStorage.setItem('array_of_answer',stringifyArray)  
        }
      }
      else{
        new_array_of_answer.push(setOption)
        let stringifyNewArray = JSON.stringify(new_array_of_answer)
        localStorage.setItem('array_of_answer',stringifyNewArray) 
      }
    }
    function pushArray(id, jawaban) {
      arrayOfRequest.push({
        id: id,
        jawaban: jawaban
      })
    }

    function submitTest() {
       let c = confirm("apakah anda sudah yakin ?")
      if (c) {
        let opt = {
          method: 'POST',
          body: localStorage.getItem('array_of_answer') != null ? localStorage.getItem('array_of_answer') : [],
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        }
        fetch('{{ url("user/action/koreksi/test") }}', opt)
          .then(r => {
            if (r.ok) {
              // return r.json()
              localStorage.clear();
              window.location.href = "{{ url('user/view/dashboard') }}"
            }
          })
      }
      // let pertanyaan = document.getElementsByClassName("pertanyaan")
      // let length = pertanyaan.length
      // arrayOfRequest = [];

      // for (let i = 0; i < length; i++) {
      //   console.log('object :', pertanyaan[i].id);
      //   if (document.getElementById(`soal-${pertanyaan[i].id}-option_1`).checked) {
      //     pushArray(pertanyaan[i].id, 'option_1')
      //   } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_2`).checked) {
      //     pushArray(pertanyaan[i].id, 'option_2')
      //   } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_3`).checked) {
      //     pushArray(pertanyaan[i].id, 'option_3')
      //   } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_4`).checked) {
      //     pushArray(pertanyaan[i].id, 'option_4')
      //   } else if (document.getElementById(`soal-${pertanyaan[i].id}-option_5`).checked) {
      //     pushArray(pertanyaan[i].id, 'option_5')
      //   } else {
      //     pushArray(pertanyaan[i].id, '')
      //   }
      // }
      
      // let c = confirm("apakah anda sudah yakin ?")
      // if (c) {
      //   let opt = {
      //     method: 'POST',
      //     body: JSON.stringify(arrayOfRequest),
      //     headers: {
      //       'Content-Type': 'application/json',
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      //   }
      //   fetch('{{ url("user/action/koreksi/test") }}', opt)
      //     .then(r => {
      //       if (r.ok) {
      //         // return r.json()
      //         window.location.href = "{{ url('user/view/dashboard') }}"
      //       }
      //     })
      // }


    }
  </script>
  
 <script>
  // Set the date we're counting down to
  var countDownDate = new Date("{{$waktu_selesai}}").getTime();
  
  var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    document.getElementById("timer").innerHTML =  hours + " j : "
    + minutes + " m : " + seconds + " dtk ";
      
    if (distance < 0) {
      clearInterval(x);
      let opt = {
          method: 'POST',
          body: localStorage.getItem('array_of_answer') != null ? localStorage.getItem('array_of_answer') : [],
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        }
        fetch('{{ url("user/action/koreksi/test") }}', opt)
          .then(r => {
            if (r.ok) {
              // return r.json()
              localStorage.clear();
              document.write("waktumu sudah habis");
              window.location.href = "{{ url('user/view/dashboard') }}"
            }
          })
    }
  }, 1000);
</script>
</div>
@endsection