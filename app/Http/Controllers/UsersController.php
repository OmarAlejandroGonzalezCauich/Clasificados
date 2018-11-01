<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return $users;
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
        $users = new Users();
        $users->name =$request->name;
        $users->username =$request->username;
        $users->email =$request->email;
        $users->password =$request->password;
        $users->active ='1';
        $users->save();
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
    public function update(Request $request)
    {
        $users = Users::findOrFail($request->id);
        $users->name =$request->name;
        $users->username =$request->username;
        $users->email =$request->email;
        $users->password =$request->password;
        $users->active ='1';
        $users->save();
    }

    public function desactivado(Request $request)
    {
        $users = Users::findOrFail($request->id);
        $users->active ='1';
        $users->save();
    }

    public function activado(Request $request)
    {
        $users = Users::findOrFail($request->id);
        $users->active ='0';
        $users->save();
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
