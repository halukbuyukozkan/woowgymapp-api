<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use App\Observers\FastingbloodsugarObserver;
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

    protected static function boot()
    {
        parent::boot();

        static::saved(function (Fastingbloodsugar $fastingbloodsugar) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($fastingbloodsugar->user);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
