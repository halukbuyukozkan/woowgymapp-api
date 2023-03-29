<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use App\Observers\BloodpressureObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bloodpressure extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'systolic',
        'diastolic',
        'score'
    ];

    protected static function booted()
    {
        static::observe(BloodpressureObserver::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function (Bloodpressure $bloodpressure) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($bloodpressure->user);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
