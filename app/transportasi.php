<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transportasi extends Model
{
    protected $table = 'sapras_transportasi';
    protected $fillable = ['item','kondisi_baik','kondisi_rusak','jumlah'];
}
