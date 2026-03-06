<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemain extends Authenticable
{
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
    protected function casts()
    {
        return ['last_login_at' => 'datetime'];
    }
    public function getAuthPassword(): string {
        return $this->password; //semisal kolom yang berisis password nama kolom nya bukan password
    }
    /**
     * Get all of the comments for the pemain
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faktur(): HasMany
    { //ini wajib untuk memberikan nilai
        return $this->hasMany(faktur::class, 'pembeli', 'id');
    }                          //class,  external value, local value
}
