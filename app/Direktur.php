<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Direktur extends Authenticatable
{
    use Notifiable;
    protected $guard = 'direktur';

    protected $hidden = [
        'password'
    ];
    protected $fillable = [
        'nama', 'email', 'password',
    ];
}
