<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Soal;
use App\Test;
use App\User;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SoalControllerTry extends Controller
{
    public function indexRandom(Request $request)
    {
        /**
         * MELAKUKAN PENGECEKAN USER SUDAH TEST ATAU BELUM
         */
        $user_tested = Auth::user()->hasTested;
        if ($user_tested) {
            return 'anda sudah melakukan test';
        } else {
            $test = Test::where('user_id', '=', Auth::id())->first();
            if ($test != null && Carbon::now()->gte($test->waktu_selesai)) {
                return 'Kamu sudah melakukan test waktumu sudah habis';
            } else {
                if (!$test) {
                    $waktu_mulai = Carbon::now();
                    $waktu_selesai = Carbon::now()->addMinutes(120);
                    $inserted_test = Test::create([
                        'user_id' => Auth::id(),
                        'waktu_mulai' => $waktu_mulai,
                        'waktu_selesai' => $waktu_selesai,
                    ]);

                    return $this->manualPaginateSoals($inserted_test->waktu_mulai, $inserted_test->waktu_selesai);
                    // return $this->paginateSoals($inserted_test->waktu_mulai, $inserted_test->waktu_selesai);
                } else {
                    return $this->manualPaginateSoals($test->waktu_mulai, $test->waktu_selesai);
                    // return $this->paginateSoals($test->waktu_mulai, $test->waktu_selesai);
                }
            }
        }
    }
    public function paginateSoals($waktu_mulai, $waktu_selesai)
    {
        $allSoal = Soal::all();
        $countSoal = $allSoal->count();

        // start limit random and paginate 
        if ($countSoal > 0) {
            $soal = Soal::simplePaginate(5);
            $total = $soal->count();
            $arr = [
                'soals' => $soal,
                'total' => $total,
                'waktu_mulai' => $waktu_mulai,
                'waktu_selesai' => $waktu_selesai
            ];
            return view('user/try_test_user', $arr);
        } else {
            return "sedang dalam proses penyusunan soal";
        }
        // end limit random and paginate 
    }
    public function manualPaginateSoals($waktu_mulai, $waktu_selesai)
    {

        $allSoal = Soal::all();
        $countSoal = $allSoal->count();

        // start limit random and paginate 
        if ($countSoal > 0) {
            // $soal = Soal::simplePaginate(5);
            $current_page = request()->input("page") ?? 1;
            $per_page = 10;

            $array = Soal::limit(50)->get();
            $total = count($array);

            $starting_point = ($current_page * $per_page) - $per_page;
            $array = $array->toArray();

            $array = array_slice($array, $starting_point, $per_page, true);


            $paginate = new Paginator(
                $array,
                $total,
                $per_page,
                $current_page,
                [
                    'path' => request()->url(),
                    'query' => request()->query()
                ]
            );
            // return $array;
            $arr = [
                'soals' => $array,
                'links' => $paginate,
                'total' => $total,
                'waktu_mulai' => $waktu_mulai,
                'waktu_selesai' => $waktu_selesai
            ];
            return view('user/try_test_user', $arr);
        } else {
            return "sedang dalam proses penyusunan soal";
        }
        // end limit random and paginate 
    }
}
