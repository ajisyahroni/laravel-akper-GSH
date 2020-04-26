<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    
    protected $hidden = [
        'password'
    ];
    protected $fillable = [
        'nama', 'email', 'password',
    ];
}
