<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = ['image','judul','deskripsi','map'];
}
