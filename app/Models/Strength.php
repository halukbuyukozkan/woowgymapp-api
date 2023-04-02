<?php

namespace App\Models;

use App\Observers\StrengthObserver;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use App\Observers\StrengthPushSitObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strength extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'claw_grip_strength_right_hand',
        'claw_grip_strength_right_hand_score',
        'claw_grip_strength_left_hand',
        'claw_grip_strength_left_hand_score',
        'push_up_test',
        'push_up_test_score',
        'wall_squat',
        'wall_squat_score',
        'sit_up_test',
        'sit_up_test_score',
        'plank_test',
        'plank_test_score',
        'score'
    ];

    protected static function boot()
    {
        parent::boot();
        static::observe(StrengthObserver::class);
        static::observe(StrengthPushSitObserver::class);

        static::saved(function (Strength $strength) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($strength->user);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
