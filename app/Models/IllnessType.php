<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IllnessType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function illnesstype(): HasMany
    {
        return $this->hasMany(Illness::class);
    }
}
