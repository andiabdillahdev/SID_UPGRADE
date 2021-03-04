<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class airbersih extends Model
{
    protected $table = 'sapras_airbersih';
    protected $fillable = ['item','jumlah'];
}
