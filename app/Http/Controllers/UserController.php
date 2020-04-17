<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // PROPERTY HERE
    private $folderFoto = "uploads/foto";
    private $folderIjazah = "uploads/ijazah";
    private $folderTransfer = "uploads/transfer";
    private $folderTestKesehatan = "uploads/test_kesehatan";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_view()
    {
        return view('user/login_user');
    }
    public function dashboard_view()
    {
        return view('user/dashboard_user');
    }
    public function register_view()
    {
        return view('user/registration_user');
    }
    public function test_view()
    {
        return view('user/test_user');
    }


    public function uploadTransfer(Request $req)
    {
        $bukti_tf_url = "https://dummyimage.com/600x400/ffe8ff/767bc4";
        if (env('APP_ENV', 'local')) {
            $bukti_tf_file = $req->file('file_bukti_transfer');
            $bukti_tf_url = "/$this->folderTransfer/" . time() . "_" . $bukti_tf_file->getClientOriginalName();
            $bukti_tf_file->move($this->folderTransfer, $bukti_tf_url);
        }

        $id = Auth::id();
        $singleUser = User::where('id', $id)->first();
        $singleUser->tf_url = $bukti_tf_url;
        $singleUser->save();

        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.view');
        } else {
            return redirect()->back()->withErrors(['cek email kembali dan password']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing.page');
    }
    public function create(Request $req)
    {
        $rules = [
            'nama' => 'required|string',
            'email' => 'required|unique:users',
            'nik' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'telepon' => 'required|string',
            'nama_ibu_kandung' => 'required|string',
            'nama_ayah_kandung' => 'required|string',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'foto_file' => 'required',
            'ijazah_file' => 'required',
            'test_kesehatan_file' => 'required',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'kodepos' => 'required|numeric',
            'pendidikan_terakhir' => 'required|string',
            'sekolah_asal' => 'required|string',
            'rata_nem' => 'required',
            'isCBT' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed'
        ];
        $input = $req->all();

        $foto_url = "https://dummyimage.com/600x400/ffe8ff/767bc4";
        $ijazah_url = "https://dummyimage.com/600x400/ffe8ff/767bc4";
        $test_kesehatan_url = "https://dummyimage.com/600x400/ffe8ff/767bc4";

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return redirect()->back()->withErrors($validator);
        }

        if (env('APP_ENV', 'local')) {
            $foto_file = $req->file('foto_file');
            $ijazah_file = $req->file('ijazah_file');
            $test_kesehatan_file = $req->file('test_kesehatan_file');

            // // UPLOAD FOTO
            $foto_url = "/$this->folderFoto/" . time() . "_" . $foto_file->getClientOriginalName();
            $foto_file->move($this->folderFoto, $foto_url);

            // UPLOAD IJAZAH
            $ijazah_url = "/$this->folderIjazah/" . time() . "_" . $ijazah_file->getClientOriginalName();
            $ijazah_file->move($this->folderIjazah, $ijazah_url);

            // TEST KESEHATAN IJAZAH
            $test_kesehatan_url = "/$this->folderTestKesehatan/" . time() . "_" . $test_kesehatan_file->getClientOriginalName();
            $test_kesehatan_file->move($this->folderTestKesehatan, $test_kesehatan_url);
        }

        $input['foto_url'] = $foto_url;
        $input['ijazah_url'] = $ijazah_url;
        $input['test_kesehatan_url'] = $test_kesehatan_url;

        $input['password'] = bcrypt($req->password);

        User::create($input);
        // return response()->json(['msg' => 'created'], 200);
        return redirect()->route('login.view');
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
