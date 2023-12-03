<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelJoin extends Model
{
    use HasFactory, Notifiable;
    protected $table = "volunteers";
    protected $fillable = [
        'email',
        'fullname',
        'phone_number',
        'location',
        'interest',
    ];
}
