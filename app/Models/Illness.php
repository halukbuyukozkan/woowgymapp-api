<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Illness extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function illness(): BelongsToMany
{
    return $this->belongsToMany(Parq::class);
}

}
