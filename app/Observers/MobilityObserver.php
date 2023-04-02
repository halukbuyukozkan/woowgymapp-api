<?php

namespace App\Observers;

use App\Models\Mobility;

class MobilityObserver
{
    public function created(Mobility $mobility)
    {
        if($mobility->overhead_squat == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->overhead_squat_score = 1;
        }elseif($mobility->overhead_squat == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->overhead_squat_score = 2;
        }elseif($mobility->overhead_squat >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->overhead_squat_score = 3;
        }

        if($mobility->shoulder_mobility == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->shoulder_mobility_score = 1;
        }elseif($mobility->shoulder_mobility == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->shoulder_mobility_score = 2;
        }elseif($mobility->shoulder_mobility >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->shoulder_mobility_score = 3;
        }

        if($mobility->hurdle_step == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->hurdle_step_score = 1;
        }elseif($mobility->hurdle_step == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->hurdle_step_score = 2;
        }elseif($mobility->hurdle_step >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->hurdle_step_score = 3;
        }

        if($mobility->in_line_lunge == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->in_line_lunge_score = 1;
        }elseif($mobility->in_line_lunge == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->in_line_lunge_score = 2;
        }elseif($mobility->in_line_lunge >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->in_line_lunge_score = 3;
        }

        if($mobility->active_straight_leg_raise == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->active_straight_leg_raise_score = 1;
        }elseif($mobility->active_straight_leg_raise == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->active_straight_leg_raise_score = 2;
        }elseif($mobility->active_straight_leg_raise >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->active_straight_leg_raise_score = 3;
        }

        if($mobility->trunk_stability_push_up == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->trunk_stability_push_up_score = 1;
        }elseif($mobility->trunk_stability_push_up == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->trunk_stability_push_up_score = 2;
        }elseif($mobility->trunk_stability_push_up >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->trunk_stability_push_up_score = 3;
        }

        if($mobility->rotary_stability == 1) {
            $mobility->score = $mobility->score + 1;
            $mobility->rotary_stability_score = 1;
        }elseif($mobility->rotary_stability == 2) {
            $mobility->score = $mobility->score + 2;
            $mobility->rotary_stability_score = 2;
        }elseif($mobility->rotary_stability >= 3) {
            $mobility->score = $mobility->score + 3;
            $mobility->rotary_stability_score = 3;
        }

        $mobility->save();
    }        
}
