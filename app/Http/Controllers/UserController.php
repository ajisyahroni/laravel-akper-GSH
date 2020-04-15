<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // PROPERTY HERE
    private $folderFoto = "uploads/foto";
    private $folderIjazah = "uploads/ijazah";
    private $folderTransfer = "uploads/transfer";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $user = User::all();
        // return response()->json($user);
        return view('admin/dashboard_admin', ['users' => $user]);
    }

    public function indexById($id)
    {

        $user = User::where('id', $id)->first();
        return view('admin/detail', ['user' => $user]);
        // return response()->json($user);
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

    public function uploadTransfer(Request $req, $id)
    {
        // password
        // $noencrypt_pass = $this->pin_generator();
        // GET TRANSFER FILE
        $bukti_tf_file = $req->file('file_bukti_transfer');
        $bukti_tf_url = "/$this->folderFoto/" . time() . "_" . $bukti_tf_file->getClientOriginalName();
        $bukti_tf_file->move($this->folderTransfer, $bukti_tf_url);

        // update user password
        $singleUser = User::where('id', $id)->first();
        // $singleUser->password = bcrypt($noencrypt_pass);
        $singleUser->tf_url = $bukti_tf_url;
        $singleUser->save();

        return response()->json($singleUser);
    }
    public function activateUser($id)
    {
        $singleUser = User::where('id', $id)->first();
        $singleUser->hasActivated = 1;
        $singleUser->save();
        return response()->json([
            'msg' => 'berhasil aktivasi'
        ], 200);
    }
    public function rejectUser($id)
    {
        $singleUser = User::where('id', $id)->first();
        $singleUser->hasActivated = 0;
        $singleUser->save();
        return response()->json([
            'msg' => 'berhasil menolah user'
        ], 200);
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
            'foto_file' => 'required',
            'ijazah_file' => 'required',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'kodepos' => 'required|numeric',
            'pendidikan_terakhir' => 'required|string',
            'rata_nem' => 'required',
            'isCBT' => 'required|numeric',
            'password' => 'required|string|min:6'
        ];
        $input = $req->all();

        $foto_url = "";
        $ijazah_url = "";

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $error;
        }

        if (env('APP_ENV', 'local')) {
            $foto_file = $req->file('foto_file');
            $ijazah_file = $req->file('ijazah_file');

            // // UPLOAD FOTO
            $foto_url = "/$this->folderFoto/" . time() . "_" . $foto_file->getClientOriginalName();
            $foto_file->move($this->folderFoto, $foto_url);

            // UPLOAD IJAZAH
            $ijazah_url = "/$this->folderIjazah/" . time() . "_" . $ijazah_file->getClientOriginalName();
            $ijazah_file->move($this->folderIjazah, $ijazah_url);
        }

        $input['foto_url'] = $foto_url;
        $input['ijazah_url'] = $ijazah_url;
        $input['password'] = bcrypt($req->password);
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
