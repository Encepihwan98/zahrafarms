<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensus extends Model
{
    protected $fillable = ['nik','nama','tl','ttl','pendidikan','status_warga','gol_darah','status_pernikahan','jk'];
}
