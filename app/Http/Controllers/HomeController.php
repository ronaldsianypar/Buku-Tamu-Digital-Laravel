<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use App\Jenistamu;
Use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jml_tamu = Tamu::all()->count();
        $jml_studi_banding = Tamu::where('keperluan', 'Studi Banding')->count();
        $jml_akademik = Tamu::where('keperluan', 'Akademik(kurikulum/PS)')->count();
        $jml_keuangan = Tamu::where('keperluan', 'Keuangan(TU)')->count();
        $jml_lain = Tamu::where('keperluan', 'Lain-lain')->count();
        $jml_jenistamu = Jenistamu::all()->count();
        // $tamus = Tamu::all();
        $tamus = Jenistamu::with('tamu')->get();
        // foreach ($tamus as $key => $tamu) {
        //       $data[] = $tamu->tamu->count();
        //   }  

          // dd($data);
        return view('home', compact('jml_tamu', 'jml_studi_banding', 'jml_akademik', 'jml_keuangan', 'jml_lain', 'jml_jenistamu', 'tamus'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
