<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lembaga extends Model
{
    protected $table = 'lembaga';
    protected $fillable = ['nama','jabatan','foto'];
}
