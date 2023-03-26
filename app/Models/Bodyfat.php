<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bodyfat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rate',
        'chest',
        'abdominal',
        'thigh',
        'biceps',
        'triceps',
        'subscapular',
        'suprailiac',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
