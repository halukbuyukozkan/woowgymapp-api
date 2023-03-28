<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bloodpressure extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'systolic',
        'diastolic',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
