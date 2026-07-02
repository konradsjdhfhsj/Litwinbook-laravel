<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Posty extends Model 
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
