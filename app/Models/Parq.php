<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parq extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'illness_id',
        'chronic_illness',
        'tension',
        'cardiovascular',
        'chest_pain',
        'spinal_cord_discomfort',
        'anatomical_discomfort',
        'operation',
        'diabetes',
        'medicine',
        'supplements',
        'smoke',
        'addiction',
        'allergy',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function illnesses(): BelongsToMany
    {
        return $this->belongsToMany(Illness::class);
    }
}
