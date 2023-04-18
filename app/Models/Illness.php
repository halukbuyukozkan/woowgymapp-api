<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Illness extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'illness_type_id',
    ];

    public function parqs(): BelongsToMany
    {
        return $this->belongsToMany(Parq::class);
    }

    public function illnessType(): BelongsTo
    {
        return $this->belongsTo(IllnessType::class);
    }
}
