<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_product', 'deskripsi', 'harga', 'foto'
    ];
}
