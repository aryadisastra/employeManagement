<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';

    public function userData()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id','id');
    }
}
