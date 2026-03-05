<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class administrator extends Authenticatable implements FilamentUser
{
    use HasFactory,Notifiable;
    protected $table = 'administrators';
    protected $fillable = [
        'id',
        'username',
        'password',
        'last_login_at',
        'created_at',
        'updated_at'
    ];
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
