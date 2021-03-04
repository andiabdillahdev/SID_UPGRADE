<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class olahraga extends Model
{
    protected $table = 'sapras_olahraga';
    protected $fillable = ['item','jumlah'];
}
