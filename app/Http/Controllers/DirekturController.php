<?php

namespace App\Http\Controllers;

use App\Direktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_view()
    {
        return view('direktur/login_direktur');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('direktur')->attempt($credentials)) {
            return redirect()->route('dashboard.direktur.view');
        } else {
            return redirect()->back()->withErrors(['cek email kembali dan password']);
        }
    }
    public function logout()
    {
        Auth::guard('direktur')->logout();
        return redirect()->route('login.direktur.view');
    }
    public function dashboard()
    {
        $user = User::all();
        return view('direktur/dashboard_direktur', ['users' => $user]);
        //
    }
    public function userById($id)
    {

        $user = User::where('id', $id)->first();
        return view('direktur/detail', ['user' => $user]);
        // return response()->json($user);
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
    public function pengaturan()
    {
        return view('direktur/pengaturan_direktur');
    }
    public function changePassword(Request $req)
    {
        $direktur = Auth::guard('direktur')->user();
        $oldPassword = $req->oldPassword;
        $newPassword = $req->newPassword;
        $confirmNewPassword = $req->confirmNewPassword;
        if (Hash::check($oldPassword, $direktur->password)) {
            if ($newPassword == $confirmNewPassword) {
                $id = $direktur->id;
                $updateAdmin = Direktur::find($id);
                $updateAdmin->password = bcrypt($newPassword);
                $updateAdmin->update();
                return redirect()->back()->withErrors(['berhasil']);
            } else {
                return redirect()->back()->withErrors(['password baru & konfirmasi password tidak valid']);
            }
        } else {
            return redirect()->back()->withErrors(['password lama tidak valid']);
        }
    }
}
