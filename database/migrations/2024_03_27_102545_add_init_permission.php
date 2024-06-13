<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $list = [
            'create-divisi',
            'read-divisi',
            'write-divisi',
            'create-user',
            'read-user',
            'write-user',
            'create-employee',
            'read-employee',
            'write-employee',
            'create-jabatan',
            'read-jabatan',
            'write-jabatan',
        ];

        foreach($list as $l){
            Permission::create(['name' => $l]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $list = [
            'create-divisi',
            'read-divisi',
            'write-divisi',
            'create-user',
            'read-user',
            'write-user',
            'create-employee',
            'read-employee',
            'write-employee',
            'create-jabatan',
            'read-jabatan',
            'write-jabatan',
        ];

        Permission::whereIn('name', $list)->delete();
    }
};
