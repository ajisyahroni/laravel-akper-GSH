<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soal extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'pertanyaan',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'option_5',
        'jawaban'
    ];
    protected $hidden = ['jawaban', 'created_at', 'updated_at', 'deleted_at'];
}
