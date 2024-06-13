<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use App\Models\Pesantren;
use App\Models\User;
use Illuminate\Http\Request;

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
        $data['totalDivisi'] = 0;
        $data['totalEmployee'] = 0;

        return view('home', $data);
    }

    public function getDataChart()
    {
        $chart =[]; 
        $totalPesantrenData = 0;
        $totalSantriData = 0;
        $totalPesantren = 0;
        $totalSantri = 0;
        $lembaga = Lembaga::where('provinsi','!=',null)->get()->groupBy('provinsi');
        foreach($lembaga as $dt)
        {   
            foreach($dt as $lm){
                $pesantren = Pesantren::where('lembaga_id',$lm->id)->count();
                $santri    = Pesantren::where('lembaga_id',$lm->id)->sum('jumlah_santri');
                $totalPesantren     += $pesantren;
                $totalSantri        += $santri;
                $totalPesantrenData += $pesantren;
                $totalSantriData        += $santri;
                $chart[$lm->provinsi] = [
                    'provinsi'  => $lm->Provinsi->name,
                    'pesantren' => $totalPesantren,
                    'santri'    => $totalSantri,
                ];
            }
            $totalPesantren = $totalSantri = 0;
            $chart[$lm->provinsi]['totalPesantren'] = $totalPesantrenData;
            $chart[$lm->provinsi]['totalSantri'] = $totalSantriData;
        }
        return response()->json($chart);
    }

}
