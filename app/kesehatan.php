<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kesehatan extends Model
{
    protected $table = 'sapras_kesehatan';
    protected $fillable = ['item','jumlah'];
}
