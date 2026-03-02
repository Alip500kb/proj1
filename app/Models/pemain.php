<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemain extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'username',
        'password',
        'last_login_at',
        'created_at',
        'updated_at',
        'deleted_at',
        'delete_reason'
    ];
    protected $table = 'pemains';
    protected static function newFactory()
    {
        return \Database\Factories\pemainFactory::new();
    }
    public function getAuthPasswordName(): string {
        return 'password';
    }
    public function getAuthIdentifierName(): string {
        return 'username';
    }
}
