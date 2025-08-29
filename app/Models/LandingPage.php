<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'slug',
        'html',
        'thambnail',
        'views',
    ];
}
