<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk3 extends Model
{
    protected $table = 'produk3';
    public $timestamps = false;

    protected $fillable = ['nama_produk', 'deskripsi', 'harga', 'foto_product'];
}
