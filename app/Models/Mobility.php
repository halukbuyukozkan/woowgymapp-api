<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'overhead_squat',
        'overhead_squat_score',
        'shoulder_mobility',
        'shoulder_mobility_score',
        'hurdle_step',
        'hurdle_step_score',
        'in_line_lunge',
        'in_line_lunge_score',
        'active_straight_leg_raise',
        'active_straight_leg_raise_score',
        'trunk_stability_push_up',
        'trunk_stability_push_up_score',
        'rotary_stability',
        'rotary_stability_score',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
