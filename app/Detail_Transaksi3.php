<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi3 extends Model
{
    protected $table = 'detail_transaksi3';
    public $timestamps = false;

    protected $fillable = ['id_transaksi3', 'id_produk3', 'qty', 'subtotal'];
}
