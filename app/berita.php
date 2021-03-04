<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'kabar_desa';
    protected $fillable = ['judul','gambar','sumber_gambar','slug','kategori','konten','tanggal'];
}
