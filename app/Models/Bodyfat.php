<?php

namespace App\Models;

use App\Observers\BodyfatObserver;
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

    protected static function boot()
    {
        parent::boot();

        static::observe(BodyfatObserver::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
