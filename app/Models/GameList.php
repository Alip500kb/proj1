<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameList extends Model
{
    use HasFactory;
    protected $table = 'game-lists'; //nama table tentunya
    protected $fillable = [
        'id',
        'gamename',
        'genre',
        'desc',
        'price',
        'version',
        'uploaded_at'
    ];
    public $timestamps = false; //factoryy brengsek defaultnya pakek tinestamps segala
    protected $primaryKey = 'id'; //primary key

    protected static function newFactory()
    {
        return \Database\Factories\GameListFactory::new(); //jika nama factory dengan model berbeda ingat
    }
}
