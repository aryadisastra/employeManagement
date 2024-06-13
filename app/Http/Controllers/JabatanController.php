<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::get();
        activityInsert("Membuka Halaman Jabatan");

        return view('admin.jabatan.index',['data'=>$data]);
    }

    public function getData()
    {
        try {
            $datas = [];
            $divisi = Jabatan::get();
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
                return redirect('/jabatan')->with('fail', 'Data gagal disimpan!');
            }
    
            DB::beginTransaction();

            $insert = new Jabatan();

            $insert->nama       = $request->nama;
            $insert->save();

            DB::commit();


            activityInsert("Membuat Jabatan Baru : ".$request->nama);
            return redirect('/jabatan')->with('success', 'Jabatan Berhasil Dibuat.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/jabatan')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function update(Request $request,$id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string|max:255',
            ]);
    
            if ($validator->fails()) {
                return redirect('/jabatan')->with('fail', 'Data gagal disimpan!');
            }
    
            DB::beginTransaction();

            $insert = Jabatan::find($id);

            $insert->nama       = $request->nama;
            $insert->save();

            DB::commit();


            activityInsert("Update Jabatan : ".$request->nama);
            return redirect('/jabatan')->with('success', 'Jabatan Berhasil Di Update.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/jabatan')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function delete($id)
    {
        $divisi = Jabatan::find($id);
        $divisi->delete();
        activityInsert("Menghapus Jabatan : ".$divisi->name);
        return response()->json(['message' => 'Jabatan Berhasil Dihapus.']);
    }
}
