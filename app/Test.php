<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['user_id', 'waktu_mulai', 'waktu_selesai'];
    public $timestamps = FALSE;
}
