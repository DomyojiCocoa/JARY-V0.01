<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_site',
        'address',
<<<<<<< HEAD
        'schedule',
=======
        'schedule_open',
        'schedule_close',
>>>>>>> yeison
        'weather_preferable',
        'url_img',
        'url_map',
    ];
}
