<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class irigasi extends Model
{
    protected $table = 'sapras_irigasi';
    protected $fillable = ['item','jumlah'];
}
