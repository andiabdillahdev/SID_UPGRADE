<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    protected $table = 'sapras_pendidikan';
    protected $fillable = ['item','sewa','milik_sendiri','jumlah'];
}
