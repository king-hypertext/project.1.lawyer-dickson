<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use HasFactory, Notifiable;
    protected $table = "news";
    protected $fillable = [
        'title',
        'headline',
        'details',
        'url',
        'image',
        'image_1',
        'image_2',
        'image_3',
        'user',
        'date'
    ];
}
