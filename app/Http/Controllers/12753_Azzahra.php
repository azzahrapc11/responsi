<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\12753_Azzahra_model;

class 12753_Azzahra extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data = 12753_Azzahra_model::all();
		return view ('12753_azzahra_models',compact('data'));
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('12753_azzahra_models_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new 12753_Azzahra_model();
$data->nama = $request->nama;
$data->email = $request->email;
$data->password = $request->password;
$data->macAddress = $request->macAddress;
$data->save();
return redirect()->route('12753_azzahra_models.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = new 12753_Azzahra_model();
$data->nama = $request->nama;
$data->email = $request->email;
$data->password = $request->password;
$data->macAddress = $request->macAddress;
$data->save();
return redirect()->route('12753_azzahra_models.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = 12753_Azzahra_model::where('id',$id)->first();
		$data->delete();
		return redirect()->route('12753_azzahra_models.index')->with('alert-success','Data berhasil dihapus!');
    }
}
