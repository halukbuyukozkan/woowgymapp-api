<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parqillness extends Model
{
    use HasFactory;

    protected $fillable = [
        'parq_id',
        'illness_id',
    ];

    public function illness(): BelongsToMany
{
    return $this->belongsToMany(Illness::class);
}
}
