<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Pemain extends Authenticable
{
    use HasFactory,Notifiable;
    protected $hidden = ['id'];
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
    protected function casts()
    {
        return ['last_login_at' => 'datetime'];
    }
    protected static function newFactory()

    {
        return \Database\Factories\pemainFactory::new();
    }
    public function getAuthPasswordName(): string {
        return $this->password;
    }
    public function getAuthIdentifierName(): string {
        return $this->username;
    }
}
