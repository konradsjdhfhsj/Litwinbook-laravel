<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Posty extends Model 
{
    use Notifiable;

    protected $table = 'posty';

    public $timestamps = false;
public function autor()
{
    return $this->belongsTo(Osoby::class, 'autor');
}
    protected $fillable = [
        'autor',
        'tresc',
        'data',
        'like',
        'zdjecie',
        'komentarz',
        'altor_komentarza',
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
