<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'pendudukdesa';
    protected $fillable = ['dusun','alamat_skrng','no_kk','nik','nama','jenis_kelamin','hubungan','tempat_lahir','tgl_lahir','usia','status','agama','golda','kewarganegaraan'];
}
