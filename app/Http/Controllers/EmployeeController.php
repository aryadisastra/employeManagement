<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Employee;
use App\Models\Jabatan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::get();
        $divisi     = Divisi::get();
        $jabatan    = Jabatan::get();
        activityInsert("Membuka Halaman Employee");

        return view('admin.employee.index',['data'=>$data,'divisi'=>$divisi,'jabatan'=>$jabatan]);
    }

    public function create()
    {
        $divisi     = Divisi::get();
        $jabatan    = Jabatan::get();
        $lead       = Employee::where('status', 'aktif')
                                ->whereHas('jabatan', function($query) {
                                    $query->where('nama', '!=', 'staff')
                                        ->where('nama', '!=', 'Staff');
                                })->get();
        return view('admin.employee.form',compact('divisi','jabatan','lead'));
    }

    public function edit($id)
    {
        $divisi     = Divisi::get();
        $jabatan    = Jabatan::get();
        $lead       = Employee::where('status', 'aktif')
                                ->whereHas('jabatan', function($query) {
                                    $query->where('nama', '!=', 'staff')
                                        ->where('nama', '!=', 'Staff');
                                })->get();

        $data       = Employee::where('id',$id)->first();
        return view('admin.employee.detail',compact('divisi','jabatan','lead','data'));
    }

    public function getData(Request $r)
    {
        try {
            $datas = [];
            $divisi = $r->divisi;
            $jabatan = $r->jabatan;
            $status = $r->status;

            $query = Employee::query();
            if ($divisi != null) {
                $query->where('divisi_id', $divisi);
            }
    
            if ($jabatan != null) {
                $query->where('jabatan_id', $jabatan);
            }

            if ($status != null) {
                $query->where('status', $status);
            }

            $employee = $query->get();
            foreach($employee as $dt)
            {
                $datas[] = [
                    'id'        => $dt->id,
                    'nama'      => $dt->nama,
                    'divisi'    => isset($dt->divisi) ? $dt->divisi->nama : '-',
                    'jabatan'   => isset($dt->jabatan) ? $dt->jabatan->nama : '-',
                    'status'    => $dt->status,
                    'joined'    => date("j F Y", strtotime($dt->tanggal_bergabung)),
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
                'nama'                  => 'required|string|max:255',
                'divisi'                => 'required',
                'jabatan'               => 'required',
                'gender'                => 'required',
                'email'                 => 'email',
                'tanggal_bergabung'     => 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->with('fail', 'Error Validasi : '.$validator->errors()->first());
            }
    
            DB::beginTransaction();

            $insert = new Employee();

            $insert->nama               = $request->nama;
            $insert->divisi_id          = $request->divisi;
            $insert->jabatan_id         = $request->jabatan;
            $insert->leader_id          = $request->leader;
            $insert->jenis_kelamin      = $request->gender;
            $insert->email              = $request->email;
            $insert->kontak             = $request->kontak;
            $insert->tempat_lahir       = $request->tempat_lahir;
            $insert->tanggal_lahir      = $request->tanggal_lahir;
            $insert->tanggal_bergabung  = $request->tanggal_bergabung;
            $insert->alamat             = $request->alamat;
            $insert->status             = 'aktif';
            $insert->save();

            DB::commit();


            activityInsert("Membuat Employee Baru : ".$request->nama);
            return redirect('/employee')->with('success', 'Employee Berhasil Dibuat.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function update(Request $request,$id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nama'                  => 'required|string|max:255',
                'divisi'                => 'required',
                'jabatan'               => 'required',
                'gender'                => 'required',
                'email'                 => 'email',
                'tanggal_bergabung'     => 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->with('fail', 'Error Validasi : '.$validator->errors()->first());
            }
    
            DB::beginTransaction();

            $insert = Employee::find($id);

            $insert->nama               = $request->nama;
            $insert->divisi_id          = $request->divisi;
            $insert->jabatan_id         = $request->jabatan;
            $insert->leader_id          = $request->leader;
            $insert->jenis_kelamin      = $request->gender;
            $insert->email              = $request->email;
            $insert->kontak             = $request->kontak;
            $insert->tempat_lahir       = $request->tempat_lahir;
            $insert->tanggal_lahir      = $request->tanggal_lahir;
            $insert->tanggal_bergabung  = $request->tanggal_bergabung;
            $insert->alamat             = $request->alamat;
            $insert->save();

            DB::commit();


            activityInsert("Update Employee : ".$request->nama);
            return redirect('/employee')->with('success', 'Employee Berhasil Di Update.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/employee')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function updateStatus(Request $request,$id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'status'                  => 'required|string|max:255',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->with('fail', 'Error Validasi : '.$validator->errors()->first());
            }
    
            DB::beginTransaction();

            $insert = Employee::find($id);

            $insert->status               = $request->status;
            $insert->save();

            DB::commit();


            activityInsert("Update Employee Status : ".$request->nama);
            return redirect('/employee')->with('success', 'Employee Berhasil Di Update.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/employee')->with('fail', 'Data Gagal Dibuat');
        }
    }

    public function delete($id)
    {
        $divisi = Employee::find($id);
        $divisi->delete();
        activityInsert("Menghapus Employee : ".$divisi->name);
        return response()->json(['message' => 'Employee Berhasil Dihapus.']);
    }
}
