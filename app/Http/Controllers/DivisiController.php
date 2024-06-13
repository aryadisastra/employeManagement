<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DivisiController extends Controller
{
    public function index()
    {
        $data = Divisi::get();
        activityInsert("Membuka Halaman Divisi");

        return view('admin.divisi.index',['data'=>$data]);
    }

    public function getData()
    {
        try {
            $datas = [];
            $divisi = Divisi::get();
            foreach($divisi as $dt)
            {
                $datas[] = [
                    'id'        => $dt->id,
                    'nama'      => $dt->nama,
                ];
            }
            return response()->json(['data' => $datas]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => 'Failed to retrieve user list'], 500);
        }
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|max:255',
            ]);
    
            if ($validator->fails()) {
                return redirect('/divisi')->with('fail', 'Data gagal disimpan!');
            }
    
            DB::beginTransaction();

            $insert = new Divisi();

            $insert->nama       = $request->nama;
            $insert->save();

            DB::commit();


            activityInsert("Membuat Divisi Baru : ".$request->nama);
            return redirect('/divisi')->with('success', 'Divisi Berhasil Dibuat.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/divisi')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function update(Request $request,$id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|max:255',
            ]);
    
            if ($validator->fails()) {
                return redirect('/divisi')->with('fail', 'Data gagal disimpan!');
            }
    
            DB::beginTransaction();

            $insert = Divisi::find($id);

            $insert->nama       = $request->nama;
            $insert->save();

            DB::commit();


            activityInsert("Update Divisi Baru : ".$request->nama);
            return redirect('/divisi')->with('success', 'Divisi Berhasil Di Update.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/divisi')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function delete($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();
        activityInsert("Menghapus Divisi : ".$divisi->name);
        return response()->json(['message' => 'Divisi Berhasil Dihapus.']);
    }
}
