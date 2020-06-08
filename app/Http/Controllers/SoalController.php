<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Soal;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class SoalController extends Controller
{
    // PROPERTY 
    public $totalQuestion = 100;
    public $pointPerQuestion = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexRandom()
    {
        // OLD LOGIC
        // if (Auth::check()) {
        //     $soal = Soal::all()->random($this->totalQuestion);
        //     $total = $soal->count();
        //     return view('user/test_user', ['soals' => $soal, 'total' => $total]);
        // }
        if (Auth::check()) {
            $allSoal = Soal::all();
            $countSoal = $allSoal->count();

            if($countSoal > 0){
                if ($countSoal >= 100) {
                    $soal = Soal::all()->random($this->totalQuestion);
                    $total = $soal->count();
                    return view('user/test_user', ['soals' => $soal, 'total' => $total]);
                } else {
                    $soal = Soal::inRandomOrder()->get();
                    $total = $soal->count();
                    return view('user/test_user', ['soals' => $soal, 'total' => $total]);
                }
            }
            else{
                return "sedang dalam proses penyusunan soal";
            }
        }
    }
    public function koreksi(Request $request)
    {
        if (Auth::check()) {
            $score = 0;
            $object = json_decode($request->getContent(), true);
            $countSoal = Soal::all()->count();
            $pointPerSoal = 0;
            if($countSoal >= 100){
                $pointPerSoal = 1;
            }
            else{
                $pointPerSoal = 100 / $countSoal;
            }


            foreach ($object as $key => $value) {
                $singleSoal = Soal::where('id', $value["id"])->first();

                if ($singleSoal) {
                    if ($singleSoal->jawaban == $value['jawaban']) {
                        $score += $pointPerSoal;
                    }
                }
            }

            $id = Auth::id();
            $singleUser = User::where('id', $id)->first();
            $singleUser->hasTested = Carbon::now();
            $singleUser->score = $score > 100 ? 100 : $score;
            $singleUser->save();

            return response()->json(['msg' => 'berhasil koreksi', 'score' => $score], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $options = [
            'option_1',
            'option_2',
            'option_3',
            'option_4',
            'option_5',
        ];
        $rules = [
            'pertanyaan' => 'required|string',
            'option_1' => 'required|string',
            'option_2' => 'required|string',
            'option_3' => 'required|string',
            'option_4' => 'required|string',
            'option_5' => 'required|string',
            'jawaban' => ['required', 'string', Rule::in($options)],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $error;
        }
        Soal::create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $singleSoal = Soal::find($id);
        $singleSoal->pertanyaan = $request->pertanyaan ? $request->pertanyaan : $singleSoal->pertanyaan;
        $singleSoal->option_1 = $request->option_1 ? $request->option_1 : $singleSoal->option_1;
        $singleSoal->option_2 = $request->option_2 ? $request->option_2 : $singleSoal->option_2;
        $singleSoal->option_3 = $request->option_3 ? $request->option_3 : $singleSoal->option_3;
        $singleSoal->option_4 = $request->option_4 ? $request->option_4 : $singleSoal->option_4;
        $singleSoal->option_5 = $request->option_5 ? $request->option_5 : $singleSoal->option_5;
        $singleSoal->jawaban = $request->jawaban ? $request->jawaban : $singleSoal->jawaban;
        $singleSoal->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singleSoal = Soal::where('id', $id);
        $singleSoal->delete();
        return redirect()->back();
    }
}
