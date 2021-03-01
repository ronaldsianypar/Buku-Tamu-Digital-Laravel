<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jml_tamu = Tamu::all()->count();
        $jml_studi_banding = Tamu::where('keperluan', 'Studi Banding')->count();
        $jml_akademik = Tamu::where('keperluan', 'Akademik(kurikulum/PS)')->count();
        $jml_keuangan = Tamu::where('keperluan', 'Keuangan(TU)')->count();
        $jml_lain = Tamu::where('keperluan', 'Lain-lain')->count();
        return view('Admin.dashboard', compact('jml_tamu', 'jml_studi_banding', 'jml_akademik', 'jml_keuangan', 'jml_lain'));
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
