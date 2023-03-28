<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $guarded = [''];

    public function jurusan()
    {
        return $this->belongsTo('App\Models\User', 'id_jurusan', 'id');
    }
}
