<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $user = User::all();
        return response()->json($user);
    }
    private function pin_generator()
    {
        $alpha = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $number = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $rand_index_alpha = array_rand($alpha, 2);
        $rand_index_number = array_rand($number, 2);

        $res_rand_alpha = [$alpha[$rand_index_alpha[0]], $alpha[$rand_index_alpha[1]]];
        $res_rand_number = [$number[$rand_index_number[0]], $number[$rand_index_number[1]]];

        $merge_res_rand = array_merge($res_rand_alpha, $res_rand_number);
        shuffle($merge_res_rand);

        $get_rand_string = str_replace(',', '', implode(",", $merge_res_rand));

        return $get_rand_string;
    }

    public function activateUser($id)
    {
        // password
        $noencrypt_pass = $this->pin_generator();

        // update user password
        $singleUser = User::where('id', $id)->first();
        $singleUser->password = bcrypt($noencrypt_pass);
        $singleUser->save();

        return response()->json($singleUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function createUser(Request $req)
    {
        $input = $req->all();

        $rules = [
            'nama' => 'required|string',
            'email' => 'required|unique:users',
            'nik' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'telepon' => 'required|string',
            'nama_ibu_kandung' => 'required|string',
            'nama_ayah_kandung' => 'required|string',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'foto_url' => 'required|string',
            'ijazah_url' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'kodepos' => 'required|numeric',
            'pendidikan_terakhir' => 'required|string',
            'rata_nem' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $error;
        }
        User::create($input);
        return response()->json(['msg' => 'created'], 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
