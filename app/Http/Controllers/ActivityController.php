<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('activity.index');
    }

    public function getDataActivity()
    {
        try {
            $datas = [];
            $activity = Activity::all();
            // dd($activity);
            foreach($activity as $dt)
            {
                $datas[] = [
                    'id'        => $dt->id,
                    'nama'      => isset($dt->UserData) ? $dt->UserData->name : '-',
                    'created_at'=> date("j F Y H:i", strtotime($dt->created_at)),
                    'deskripsi' => $dt->deskripsi,
                ];
            }
            return response()->json(['data' => $datas]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => 'Failed to retrieve user list'], 500);
        }
    }
}
