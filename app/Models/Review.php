<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< HEAD
=======
        'id_site',
        'id_user',
>>>>>>> yeison
        'score',
        'comment',
    ];
}
