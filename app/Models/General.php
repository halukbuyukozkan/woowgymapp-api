<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'weight',
        'height',
        'gender',
        'job',
        'age',
        'physical_performance_score'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
