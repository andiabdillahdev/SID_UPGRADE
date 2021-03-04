<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanitasi extends Model
{
    protected $table = 'sapras_sanitasi';
    protected $fillable = ['item','jumlah'];
}
