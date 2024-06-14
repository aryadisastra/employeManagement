<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Employee;
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
        $data['totalDivisi']    = Divisi::get()->count();
        $data['totalEmployee']  = Employee::where('status','aktif')->count();

        return view('home', $data);
    }

    public function getDataChart()
    {
        $chart =[]; 
        $div = Divisi::all();
        $totalDivisi    = Divisi::get()->count();
        $totalEmployee  = Employee::where('status','aktif')->count();
        foreach($div as $dt)
        {   
            $chart[$dt->nama]['totalEmployee']      = Employee::where('divisi_id',$dt->id)->count();
            $chart[$dt->nama]['divisiNama']         = $dt->nama;
            $chart[$dt->nama]['totalEmployeeAll']   = $totalEmployee;
            $chart[$dt->nama]['totalDivisiAll']     = $totalDivisi;
        }
        return response()->json($chart);
    }

}
