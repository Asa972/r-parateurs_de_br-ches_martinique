<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'photo',
        'titre',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
