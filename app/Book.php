<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
  protected $fillable = ['local_id','name','jurusan','author','copy_number','type','available_number'];
}
