<?php

namespace App\Http\Controllers;

use App\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kritik-saran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kritik-saran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kritik::create([
            'nama'=>$request->nama,
            'kritik_saran'=>$request->kritik_saran,
        ]);
        return redirect('/')->withSuccess('Terima Kasih, Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritik $kritik)
    {
        //
    }
}
