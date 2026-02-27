<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_name'
    ];
    public $timestamps = false;
    protected $table = 'category_list';
    protected $primaryKey = 'id';

    public static function sort($genre){
        return collect(GameList::all())->where('genre', $genre);
    }
}
