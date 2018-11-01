<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spots;

class SpotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spots = Spots::all();
        return $spots;
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
        $spots = new Spots();
        $spots->user_id =$request->user_id;
        $spots->clasification_id =$request->clasification_id;
        $spots->name_service =$request->name_service;
        $spots->address =$request->address;
        $spots->telephone =$request->telephone;
        $spots->email =$request->email;
        $spots->promotion =$request->promotion;
        $spots->image =$request->image;
        $spots->active ='1';
        $spots->save();
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
        $spots = Spots::findOrFail($request->id);
        $spots->user_id =$request->user_id;
        $spots->clasification_id =$request->clasification_id;
        $spots->name_service =$request->name_service;
        $spots->address =$request->address;
        $spots->telephone =$request->telephone;
        $spots->email =$request->email;
        $spots->promotion =$request->promotion;
        $spots->image =$request->image;
        $spots->active ='1';
        $spots->save();
    }

    public function desactivado(Request $request)
    {
        $users = Spots::findOrFail($request->id);
        $users->active ='1';
        $users->save();
    }

    public function activado(Request $request)
    {
        $users = Spots::findOrFail($request->id);
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
