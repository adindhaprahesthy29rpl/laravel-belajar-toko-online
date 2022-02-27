<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas3 extends Model
{
    protected $table = 'petugas3';
    public $timestamps = false;

    protected $fillable = ['nama_petugas', 'username', 'password', 'level'];
}
