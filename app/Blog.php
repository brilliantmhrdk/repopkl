<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'pesan';
    protected $fillable = ['nama','jumlah'];
}