<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peribadatan extends Model
{
    protected $table = 'sapras_peribadatan';
    protected $fillable = ['item','jumlah'];
}
