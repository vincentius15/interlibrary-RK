<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $fillable = ['user_id','book_id','tanggal_pinjam','tanggal_kembali','denda','status'];

}
