<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Messages extends Model
{
    use HasFactory, Notifiable;
    protected $table = "messages";

    protected $fillable = [
        'fullname',
        'phone_number',
        'email',
        'message'
    ];
}
