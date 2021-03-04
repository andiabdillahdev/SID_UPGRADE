<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aparat extends Model
{
    protected $table = 'aparat';
    protected $fillable = ['nama','nik','nomor_induk_pegawai','tempat_lahir','tanggal_lahir','jenis_kelamin','pendidikan','agama','pangkat','sk_pengangkatan','tgl_sk_pengangkatan','nomor_sk_pemberhentian','tgl_sk_pemberhentian','masa_jabatan','jabatan','gambar'];
}
