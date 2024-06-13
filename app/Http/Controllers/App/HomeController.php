<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Lembaga;
use App\Models\Pesantren;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['slug']   = activeSlug();
        $data['userCount'] = 10;

        $checkLembagaSlug   = Lembaga::whereSlug(activeSlug())->first();
        $checkPesantrenSlug = Pesantren::whereSlug(activeSlug())->first();
        if($checkLembagaSlug){
            return view('homeApp', $data);
        } else if ($checkPesantrenSlug)
        {
            return view('homePesantren', $data);
        }
    }
}
