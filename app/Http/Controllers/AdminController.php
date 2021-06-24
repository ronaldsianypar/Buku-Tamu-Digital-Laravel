<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use App\Jenistamu;

use PDF;
use App\Exports\TamuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_tamu = Tamu::with('jenistamu')->latest()->get();   
        return view('Admin.data-tamu', compact('data_tamu'));
    }

    public function export_excel()
    {
        return Excel::download(new TamuExport, 'Data Tamu.xlsx');
    }
    public function cetak_pdf()
    {
        $data_tamu = Tamu::with('jenistamu')->latest()->get();
 
        $pdf = PDF::loadview('Admin.Laporan.tamu-pdf',['data_tamu'=>$data_tamu]);
        return $pdf->download('laporan-data-tamu-pdf');
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
