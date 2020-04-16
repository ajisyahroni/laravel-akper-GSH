<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('admin/login_admin');
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
}
