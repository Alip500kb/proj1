<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lister extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','game_name','price'];
}
