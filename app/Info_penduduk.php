<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_penduduk extends Model
{
    protected $fillable = ['jumlah_penduduk','jumlah_laki_dewasa','jumlah_perempuan_dewasa','jumlah_anak','jumlah_lansia'];
}
