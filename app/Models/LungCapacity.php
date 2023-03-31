<?php

namespace App\Models;

use App\Observers\LungcapacityObserver;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LungCapacity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fev1',
        'fev1_score',
        'fev',
        'fev_score',
        'pef',
        'pef_score',
        'score'
    ];

    protected static function booted()
    {
        static::observe(LungcapacityObserver::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function (LungCapacity $lungCapacity) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($lungCapacity->user);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
