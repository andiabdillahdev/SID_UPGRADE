<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dusun extends Model
{
    protected $table = 'dusun';
    protected $fillable = ['nama_dusun','nama_nik'];
}
