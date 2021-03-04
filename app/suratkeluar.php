<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    protected $table = 'suratkeluar';
    protected $fillable = ['tahun','kode_surat','nomor_surat','tanggal_surat','ditujukan','perihal','file'];
}
