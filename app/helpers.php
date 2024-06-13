<?php

use App\Models\Activity;
use App\Models\Lembaga;
use App\Models\Pesantren;
use Illuminate\Support\Facades\Auth;

if (!function_exists('activeLembaga')) {
    
    function activeLembaga()
    {
        $slug = request()->slugPrefixCode;
        $lembaga = Lembaga::whereSlug($slug)->first();

        return $lembaga;
    }
}

if (!function_exists('activeSlug')) {
    
    function activeSlug()
    {
        $slug = request()->slugPrefixCode;

        return $slug;
    }
}

if (!function_exists('lembagaData')) {
    
    function lembagaData()
    {
        $slug = request()->slugPrefixCode;
        $data = Lembaga::where('slug',$slug)->first();

        return $data;
    }
}

if (!function_exists('pesantrenData')) {
    
    function pesantrenData()
    {
        $slug = request()->slugPrefixCode;
        $data = Pesantren::where('slug',$slug)->first();

        return $data;
    }
}

if (!function_exists('activityInsert')) {
    
    function activityInsert($deskripsi)
    {
        $insert             = new Activity();
        $insert->user_id    = Auth::user()->id;
        $insert->deskripsi  = $deskripsi;
        $insert->save();
    }
}

if (!function_exists('activeFrontendPesantren')) {
    function activeFrontendPesantren()
    {
        $domain = request()->getHost();
        return \Cache::remember('pesantren' . $domain, 10, function () use ($domain) {
            $organization = Pesantren::where('website_domain', $domain)->first();
            if (is_null($organization)) {
                // abort(404);
            }

            return $organization;
        });
    }
}
?>