<?php

namespace App\Models;

use App\Observers\FastingbloodsugarObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fastingbloodsugar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'glucose',
        'score'
    ];

    protected static function booted()
    {
        static::observe(FastingbloodsugarObserver::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
