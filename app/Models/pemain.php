<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pemain extends Authenticatable
{
    use HasFactory;
    use Notifiable;

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
        return $this->password;
    }
    public function getAuthIdentifierName(): string {
        return 'username';
    }
}
