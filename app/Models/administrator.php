<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    use HasFactory;
    protected $table = 'administrators';
    protected $fillable = [
        'id',
        'username',
        'password',
        'last_login_at',
        'created_at',
        'updated_at'
    ];
    
}
