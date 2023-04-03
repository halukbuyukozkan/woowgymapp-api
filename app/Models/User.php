<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }

    public function bodyfats(): HasMany
    {
        return $this->hasMany(Bodyfat::class);
    }

    public function parq(): HasOne
    {
        return $this->hasOne(Parq::class);
    }

    public function bloodpressures(): HasMany
    {
        return $this->hasMany(Bloodpressure::class);
    }

    public function fastingbloodsugars(): HasMany
    {
        return $this->hasMany(Fastingbloodsugar::class);
    }

    public function lungcapacities(): HasMany
    {
        return $this->hasMany(LungCapacity::class);
    }

    public function mobilities(): HasMany
    {
        return $this->hasMany(Mobility::class);
    }

    public function strengths(): HasMany
    {
        return $this->hasMany(Strength::class);
    }

    public function maxvo2s(): HasMany
    {
        return $this->hasMany(Maxvo2::class);
    }

    public function flexibilities(): HasMany
    {
        return $this->hasMany(Flexibility::class);
    }
}
