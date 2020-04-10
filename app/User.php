<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'telepon',
        'nama_ibu_kandung',
        'nama_ayah_kandung',
        'tinggi_badan',
        'berat_badan',
        'foto_url',
        'ijazah_url',
        'kota',
        'kecamatan',
        'alamat',
        'kodepos',
        'pendidikan_terakhir',
        'rata_nem',
        'isCBT',
        'hasActivated',
        'hasTested',
        'score',
        'isPass',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
