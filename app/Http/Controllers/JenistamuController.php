<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenistamu;
class JenistamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jns_tamu = Jenistamu::all();
        return view('Admin.Jenistamu.data-jenis-tamu', compact('jns_tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jns_tamu = Jenistamu::all();
        return view('Admin.Jenistamu.create-jenis-tamu', compact('jns_tamu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jenistamu::create([
            'jenistamu'=>$request->jenistamu,
        ]);
        return redirect('jenis-tamu')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $jns_tamu = Jenistamu::findorfail($id);
        return view('Admin.Jenistamu.edit-jenis-tamu', compact('jns_tamu'));
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
        $jns_tamu = Jenistamu::findorfail($id);
        $jns_tamu->update($request->all());
        return redirect('jenis-tamu')->withSuccess('Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jns_tamu = Jenistamu::findorfail($id);
        $jns_tamu->delete();
        return back()->with('info','Data Berhasil Dihapus!');
    }
}
