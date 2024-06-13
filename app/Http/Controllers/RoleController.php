<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('role.index');
    }

    public function getDataPermission()
    {
        try {
            $datas = [];
            $permission = Permission::all();
            foreach($permission as $dt)
            {
                $assignedRoles = Role::whereHas('permissions', function ($query) use ($dt) {
                    $query->where('id', $dt->id);
                })->pluck('name')->toArray();
                $datas[] = [
                    'id'        => $dt->id,
                    'nama'      => $dt->name,
                    'assigned'  => $assignedRoles,
                    'created_at'=> date("j F Y H:i", strtotime($dt->created_at)),
                ];
            }
            return response()->json(['data' => $datas]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve user list'], 500);
        }
    }

    public function store(Request $r)
    {
        try{
            $role = Role::where(DB::raw('LOWER(name)'), strtolower($r->nama))->first();
            if(isset($role)){
                foreach($r->permission as $dt)
                {
                    $permission = Permission::where('name',$dt)->first();
                    $role->givePermissionTo($permission);
                }
            } else {
                $newRole = Role::create(['name'=> $r->nama]);
    
                foreach($r->permission as $dt)
                {
                    $permission = Permission::where('name',$dt)->first();
                    $newRole->givePermissionTo($permission);
                }
            }
            return redirect('/role')->with('success','Role Berhasil Ditambah!');
        } catch(Exception $e)
        {
            // dd($e->getMessage());
            return redirect('/role')->with('fail','Kesalahan Input Data!');
        }
    }

    public function delete($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return response()->json(['error' => 'Data not found.'], 404);
        }

        // Hapus data
        activityInsert("Menghapus Permission ".$permission->name);
        $permission->delete();


        return response()->json(['message' => 'Data Berhasil Dihapus.']);
    }
}
