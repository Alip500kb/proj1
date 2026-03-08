<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class community extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'communities';
    protected $fillable = [
        'id',
        'user_id',
        'text'
    ];


}
