<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Osoby extends Authenticatable
{
    use Notifiable;

    protected $table = 'posty';

    public $timestamps = false;

    protected $fillable = [
        'autor',
        'tresc',
        'data',
        'like',
        'komentarz',
        'autor komentarza',
        'post_id',
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
