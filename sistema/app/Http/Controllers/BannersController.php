<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banners::all();
        return $banners;
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
        $banners = new Banners();
        $banners->user_id =$request->user_id;
        $banners->clasification_id =$request->clasification_id;
        $banners->name =$request->name;
        $banners->image =$request->image;
        $banners->active ='1';
        $banners->save();
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
        $banners = Banners::findOrFail($request->id);
        $banners->user_id =$request->user_id;
        $banners->clasification_id =$request->clasification_id;
        $banners->name =$request->name;
        $banners->image =$request->image;
        $banners->active ='1';
        $banners->save();
    }

    public function desactivado(Request $request)
    {
        $banners = Banners::findOrFail($request->id);
        $banners->active ='1';
        $banners->save();
    }

    public function activado(Request $request)
    {
        $users = Banners::findOrFail($request->id);
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
