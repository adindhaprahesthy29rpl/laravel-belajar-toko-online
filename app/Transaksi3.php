<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi3 extends Model
{
    protected $table = 'transaksi3';
    public $timestamps = false;

    protected $fillable = ['id_pelanggan3', 'id_petugas3', 'tgl_transaksi'];
}
