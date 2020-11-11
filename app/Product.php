<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="tblproduct";

    protected $fillable = [
        'nama',
        'harga',
        'warna',
        'kondisi',
        'deskripsi'
    ];
}
