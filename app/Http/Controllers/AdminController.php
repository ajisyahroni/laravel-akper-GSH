<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Admin;
use App\Soal;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_view()
    {
        return view('admin/login_admin');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard.admin.view');
        } else {
            return redirect()->back()->withErrors(['cek email kembali dan password']);
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.admin.view');
    }

    public function dashboard()
    {
        $user = User::all();
        return view('admin/dashboard_admin', ['users' => $user]);
    }

    public function showUserDetail($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin/detail', ['user' => $user]);
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

    public function showSoal()
    {
        $soal = Soal::paginate(10);
        $options = [
            'option_1',
            'option_2',
            'option_3',
            'option_4',
            'option_5',
        ];
        return view('admin/soal_admin', ['soals' => $soal, 'options' => $options]);
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
        return view('admin/pengaturan_admin');
    }
    public function changePassword(Request $req)
    {
        $admin = Auth::guard('admin')->user();
        $oldPassword = $req->oldPassword;
        $newPassword = $req->newPassword;
        $confirmNewPassword = $req->confirmNewPassword;
        if (Hash::check($oldPassword, $admin->password)) {
            if ($newPassword == $confirmNewPassword) {
                $id = $admin->id;
                $updateAdmin = Admin::find($id);
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
