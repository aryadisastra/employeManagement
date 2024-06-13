<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

/**
 * Admin User Management.
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        activityInsert("Membuka Halaman User");

        return view('admin.user.index',['data'=>$data]);
    }

    /**
     * JSON Data for DataTable.
     *
     * @return DataTable
     */
    public function getData()
    {
        try {
            $datas = [];
            $user = User::with('roles')->orderBy('id','ASC')->get();
            foreach($user as $dt)
            {
                $datas[] = [
                    'id'        => $dt->id,
                    'name'      => $dt->name,
                    'role'      => isset($dt->roles) ? $dt->roles->pluck('name')->implode(', ') : '-',
                    'email'     => $dt->email,
                ];
            }
            return response()->json(['data' => $datas]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => 'Failed to retrieve user list'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = \Spatie\Permission\Models\Role::get(['id', 'name']);

        return view ('admin.user.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|confirmed',
            ]);
    
            if ($validator->fails()) {
                return redirect('/user')->with('fail', 'Data gagal disimpan!');
            }
    
            DB::beginTransaction();

            $insert = new User();

            $insert->name       = $request->name;
            $insert->email      = $request->email;
            $insert->password   = bcrypt($request->password);
            $insert->assignRole('administrator');
            $insert->save();

            DB::commit();


            activityInsert("Membuat User Baru : ".$request->name);
            return redirect('/user')->with('success', 'User Berhasil Dibuat.');
        } catch(Exception $e)
        {
            DB::rollBack();
            return redirect('/user')->with('fail', 'Data Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('users.edit', $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = \Spatie\Permission\Models\Role::get(['id', 'name']);
        $data['object'] = User::findOrFail($id);

        return view('admin.user.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $payload = request()->only(array_keys($request->rules()));
        $payload = $this->prepareData($payload);
        $user = User::findOrFail($id);
        
        \DB::transaction(function() use($user, $payload) {
            $user->update($payload);
        });

        activityInsert("Mengubah User : ".$user->name);
        return redirect()->back()->with('status', 'User Berhasil Di Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        activityInsert("Menghapus User : ".$user->name);
        return redirect('/user')->with('status', 'User Berhasil Dihapus.');
    }

    /**
     * Prepare Data.
     *
     * @param array $payload
     * 
     * @return array
     */
    public function prepareData($payload = [])
    {
        // Upload File
        if (isset($payload['photo']) && !is_null($payload['photo'])) {
            $payload['photo'] = \Storage::disk('public')->put('assets/user', request()->file('photo'));
        }
        
        // Hash Password
        if (isset($payload['password']) && !is_null($payload['password'])) {
            $payload['password'] = \Hash::make($payload['password']);
        }

        // Clean data
        foreach ($payload as $key => $value) {
            if (is_null($value)) {
                unset($payload[$key]);
            }
        }

        return $payload;
    }
}
