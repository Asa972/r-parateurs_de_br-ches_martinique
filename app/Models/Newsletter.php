<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'photo',
    ];

    public function carnetadresse()
    {
        return $this->belongsToMany(Carnetadresse::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }//
}
