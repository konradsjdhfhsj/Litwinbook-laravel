<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Osoby extends Authenticatable
{
    use Notifiable;

    protected $table = 'osoby';

    public $timestamps = false;

    protected $fillable = [
        'imie',
        'nazwisko',
        'email',
        'password',
        'wiek',
        'avatar',
        'data_powstania_konta',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
