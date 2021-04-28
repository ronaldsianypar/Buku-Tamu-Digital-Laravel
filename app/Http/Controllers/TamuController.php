<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use App\Jenistamu;
use Carbon\Carbon;
class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jns_tamu = Jenistamu::all();
        return view('index', compact('jns_tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jns_tamu = Jenistamu::all();
        return view('index', compact('jns_tamu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $folderPath = public_path('upload/');
       
        $image_parts = explode(";base64,", $request->signed);
             
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
 
        $signature = uniqid() . '.'.$image_type;
           
        $file = $folderPath . $signature;
 
        file_put_contents($file, $image_base64);
 
        $save = new Tamu;
        $save->nama = $request->nama;
        $save->no_telp = $request->no_telp;
        $save->alamat= $request->alamat;
        $save->keperluan = $request->keperluan;
        $save->signature = $signature;
        $save->jenistamu_id = $request->jenistamu_id;
        $save->save();
        return redirect('/')->withSuccess('Terima Kasih, Data Berhasil Disimpan!');
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
        $dat = Biodata::findOrFail($id);
        $dat->update($request->all());
        return view('index', compact('dat'));
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
     // untuk mencetak seluruh data
    public function print()
    {
        $cetakdata_tamu = Tamu::all();
        return view('Admin.Laporan.cetak-tamu', compact('cetakdata_tamu'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function printForm()
    {
        return view('Admin.Laporan.cetak-tamuForm');
    }

    public function printFormPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakPertanggal = Tamu::with('jenistamu')->latest()->whereBetween('created_at', [$tglawal, $tglakhir])->get();
        return view('Admin.Laporan.cetak-tamu-pertanggal', compact('cetakPertanggal'));
    }

    public function dataTamu()
    {
       

        $day = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');



        $temps = \DB::table('tamu')
                         ->whereYear('created_at',$year)
                         ->whereMonth('created_at',$month)
                        ->whereBetween('created_at', [
                            Carbon::parse('last monday')->startOfDay(),
                            Carbon::parse('next friday')->endOfDay(),
                        ])
                        ->orderBY('created_at', 'asc')
                        ->get();

        $total = [0,0,0,0,0,0,0];



            foreach($temps as $temp){
                $test =  Carbon::parse($temp->created_at)->format('D');
                switch ($test) {
                    case "Mon":
                        $total[0] +=1;
                        break;
                    case "Tue":
                        $total[1] +=1;
                        break;
                    case "Wed":
                        $total[2] +=1;
                        break;
                    case "Thu":
                        $total[3] +=1;
                        break;
                    case "Fri":
                        $total[4] +=1;
                        break;
                    case "Sat":
                        $total[5] +=1;
                        break;
                    case "Sun":
                        $total[6] +=1;
                        break;
                    default:

                        break;
                }
            }


        // dd(json_encode($test));



        $dayCount = \DB::table('tamu')
                        ->whereYear('created_at',$year)
                        ->whereMonth('created_at',$month)
                        ->whereDay('created_at',$day)
                        ->count();
        $dayCount = \DB::table('tamu')
                        ->whereYear('created_at',$year)
                        ->whereMonth('created_at',$month)
                        ->whereDay('created_at',$day)
                        ->count();

        $monthCount = \DB::table('tamu')
                            ->whereYear('created_at',$year)
                            ->whereMonth('created_at',$month)
                            ->count();
        // dd($monthCount);
        $yearCount =\ DB::table('tamu')->whereYear('created_at',$year)->count();

        $yearMonth =\ DB::table('tamu')->whereYear('created_at',$year)->get();

        $sumMonth = [];
        $sumYear = [];
        $sumDay = [];

        for ($i=1; $i <=12 ; $i++) {
            $sumMonth[] = \DB::table('tamu')
                        ->whereMonth('created_at',$i)
                        ->whereYear('created_at',$year)
                        ->count();
        }
        for ($i=1; $i <=12 ; $i++) {
            $sumYear[] = \DB::table('tamu')
                        ->count();
        }
       for ($i=1; $i <=7 ; $i++) {
            $sumDay[] = \DB::table('tamu')
                        ->whereDay('created_at',$i)
                        ->count();
        }

    
            $hr = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];


        $transactions = Tamu::all();
        return view('Admin.detail', compact('sumMonth', 'transactions', 'hr'));
        // return response($sumMonth);
        // return view('manager.laporan transaksi.index', compact('transactions','monthCount','yearCount','dayCount','sumMonth','total'));
    }

}
