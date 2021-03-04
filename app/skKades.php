<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skKades extends Model
{
    protected $table = 'sk_kades';
    protected $fillable = ['tahun','nama_sk','file','uraian','nomor_keputusan_kades','tgl_keputusan_kades','nomor_dilaporkan','tgl_dilaporkan','keterangan'];
}
