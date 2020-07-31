@extends('user/layout/test')
@section('title','Test Online')

@section('container')
<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex justify-content-between">
        <div class="logo ml-2">
            <h1 class="text-light">
                <a href="#"><span>AKPER GSH TEST</span></a>
            </h1>
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
        {{$links}}
    </small>

    <div>
        <span id="dikerjakan">0</span> / <strong>{{$total}} </strong>
        <button onclick="submitTest()" id="submitButton" class="btn btn-danger btn-sm">Kumpulkan</button>
    </div>


</nav>

<div class="container bg-light rounded my-3">
    @foreach($soals as $no => $soal)
    <div class="row d-block p-3">
        {{-- QUESTION --}}
        <div>
            <span>{{ ++$no }}.</span>
            <h5 id="{{ $soal['id'] }}" class="pertanyaan text-left d-inline text-justify">
                <span>{{ $soal['pertanyaan'] }}</span> ?
            </h5>
        </div>

        {{-- START OPTION --}}
        <div class="ml-2 my-3">
            {{-- OPTION 1 --}}
        <div class="form-check">
            <input 
                onclick="saveToStorage(this)" 
                data-pertanyaan="{{ $soal['id'] }}" 
                data-jawaban="option_1"
                data-option="1"
                class="form-check-input" 
                type="radio" 
                name="opsi-soal-{{ $soal['id'] }}"
                id="soal-{{$soal['id']}}-option_1" 
                value="option_1">
            <label class="form-check-label" for="pilihan_1">
                {{$soal['option_1']}}
            </label>
        </div>

        {{-- OPTION 2 --}}
        <div class="form-check">
            <input 
                onclick="saveToStorage(this)" 
                data-pertanyaan="{{ $soal['id'] }}" 
                data-jawaban="option_2"
                class="form-check-input" 
                type="radio" 
                name="opsi-soal-{{ $soal['id'] }}" 
                data-option="2"
                id="soal-{{$soal['id']}}-option_2" 
                value="option_2">
            <label class="form-check-label" for="pilihan_2">
                {{$soal['option_2']}}
            </label>
        </div>

        {{-- OPTION 3 --}}
        <div class="form-check">
            <input 
                onclick="saveToStorage(this)" 
                data-pertanyaan="{{ $soal['id'] }}" 
                data-jawaban="option_3"
                class="form-check-input" 
                type="radio" 
                name="opsi-soal-{{ $soal['id'] }}" 
                data-option="3"
                id="soal-{{$soal['id']}}-option_3" 
                value="option_3">
            <label class="form-check-label" for="pilihan_3">
                {{$soal['option_3']}}
            </label>
        </div>

        {{-- OPTION 4 --}}
        <div class="form-check">
            <input 
                onclick="saveToStorage(this)" 
                data-pertanyaan="{{ $soal['id'] }}" 
                data-jawaban="option_4"
                class="form-check-input" 
                type="radio" 
                name="opsi-soal-{{ $soal['id'] }}" 
                data-option="4"
                id="soal-{{$soal['id']}}-option_4" 
                value="option_4">
            <label class="form-check-label" for="pilihan_4">
                {{$soal['option_4']}}
            </label>
        </div>

        {{-- OPTION 5 --}}
        <div class="form-check">
            <input 
                onclick="saveToStorage(this)" 
                data-pertanyaan="{{ $soal['id'] }}" 
                data-jawaban="option_5"
                class="form-check-input" 
                type="radio" 
                name="opsi-soal-{{ $soal['id'] }}" 
                data-option="5"
                id="soal-{{$soal['id']}}-option_5" 
                value="option_5">
            <label class="form-check-label" for="pilihan_5">
                {{$soal['option_5']}}
            </label>
        </div>
        </div>

        {{-- END OPTION --}}
    </div>
    @endforeach
    <script>
        var arrayOfRequest = []
        var array_of_answer = [];
        var new_array_of_answer = [];
        
        function totalDikerjakan(){
            var arr_local_storage = JSON.parse(localStorage.getItem('array_of_answer'))
            if (arr_local_storage) {
                var soalDikerjakan = Array.from(arr_local_storage).length
                var elementDikerjakan = document.getElementById('dikerjakan');
                elementDikerjakan.innerHTML = soalDikerjakan
            }
        }

        (function mounted() {
            var get_array_local_storage = JSON.parse(localStorage.getItem('array_of_answer'))
            if (get_array_local_storage) {

                var totalDikerjakan = Array.from(get_array_local_storage).length
                var elemDikerjakan = document.getElementById('dikerjakan');
                elemDikerjakan.innerHTML = totalDikerjakan

                get_array_local_storage.map(object => {
                    id = `soal-${object.id}-${object.jawaban}`;
                    var elem = document.getElementById(id)
                    if (elem) {
                        elem.checked = true
                    }
                })
            }
        }())


        function createObject(id_pertanyaan, id_jawaban) {
            return {
                id: id_pertanyaan,
                jawaban: id_jawaban
            }
        }
        function saveToStorage(element) {
            let id_pertanyaan = element.getAttribute('data-pertanyaan');
            let jawaban = element.getAttribute('data-jawaban');
            let setOption = new createObject(id_pertanyaan, jawaban);

            array_of_answer = JSON.parse(localStorage.getItem('array_of_answer'))

            if (array_of_answer) {
                let findSame = array_of_answer.some(item => item.id == id_pertanyaan)
                if (!findSame) {
                    array_of_answer.push(setOption)
                    let stringifyArray = JSON.stringify(array_of_answer)
                    localStorage.setItem('array_of_answer', stringifyArray)
                }
            }
            else {
                new_array_of_answer.push(setOption)
                let stringifyNewArray = JSON.stringify(new_array_of_answer)
                localStorage.setItem('array_of_answer', stringifyNewArray)
            }
            totalDikerjakan()
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
                    fetch('{{ request()->getSchemeAndHttpHost() }}' + '/user/action/koreksi/test',opt)
                    .then(r => {
                        if (r.ok) {
                            localStorage.clear();
                            window.location.href = "{{ url('user/view/dashboard') }}"
                        }
                    })
            }
        }
    </script>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{$waktu_selesai}}").getTime();

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("timer").innerHTML = hours + " j : "
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
                    fetch('{{ request()->getSchemeAndHttpHost() }}' + '/user/action/koreksi/test',opt)
                    .then(r => {
                        if (r.ok) {
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