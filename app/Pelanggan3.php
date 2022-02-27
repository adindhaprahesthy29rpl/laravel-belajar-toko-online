<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan3 extends Model
{
    protected $table = 'pelanggan3';
    public $timestamps = false;

    protected $fillable = ['nama', 'alamat', 'telp', 'username', 'password'];
}
