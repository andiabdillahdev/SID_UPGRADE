<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class potensi extends Model
{
    protected $table = 'potensi';
    protected $fillable = ['nama','file','tahun','created_at'];
}
