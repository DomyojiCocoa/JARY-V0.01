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
        'schedule_open',
        'schedule_close',
        'weather_preferable',
        'url_img',
        'url_map',
    ];
}
