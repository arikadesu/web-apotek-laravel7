<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::All();
        return view('user.user', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pass = $request->get('passw');
        $kpass = $request->get('kpassw');
        if ($pass == $kpass) {
            $save_user = new \App\User;
            $save_user->name = $request->get('nama');
            $save_user->email = $request->get('email');
            $save_user->username = $request->get('usname');
            $save_user->password = \Hash::make($request->get('passw'));
            $save_user->roles = json_encode($request->get('roles'));
            $save_user->address = $request->get('alamat');
            $save_user->phone = $request->get('tlp');
            $save_user->status = $request->get('status');
            $save_user->save();
        }
        return redirect()->route('user.index');
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
        $user_edit = \App\User::findOrFail($id);
        return view('user.edit', ['user' => $user_edit]);
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
        $pass = $request->get('passw');
        $kpass = $request->get('kpassw');
        $user = \App\User::findOrFail($id);
        if ($request->get('ubahpass') == 'ubah') {
            if ($pass == $kpass) {
                $user->name = $request->get('nama');
                $user->email = $request->get('email');
                $user->username = $request->get('usname');
                $user->roles = json_encode($request->get('roles'));
                $user->address = $request->get('alamat');
                $user->phone = $request->get('tlp');
                $user->status = $request->get('status');
                $user->password = \Hash::make($request->get('passw'));
                $user->save();
            }
        } else {
            $user->name = $request->get('nama');
            $user->email = $request->get('email');
            $user->username = $request->get('usname');
            $user->roles = json_encode($request->get('roles'));
            $user->address = $request->get('alamat');
            $user->phone = $request->get('tlp');
            $user->status = $request->get('status');
            $user->save();
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);
        $user->delete();
        return redirect()->route( 'user.index');
    }
}
