<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    public function divisi()
    {
        return $this->belongsTo(Divisi::class,'divisi_id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class,'jabatan_id');
    }

    public function lead()
    {
        return $this->belongsTo(Employee::class, 'leader_id');
    }

    public function staff()
    {
        return $this->hasMany(Employee::class, 'leader_id');
    }

}
