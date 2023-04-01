<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobilityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'overhead_squat' => 'required|integer',
            'shoulder_mobility' => 'required|integer',
            'hurdle_step' => 'required|integer',
            'in_line_lunge' => 'required|integer',
            'active_straight_leg_raise' => 'required|integer',
            'trunk_stability_push_up' => 'required|integer',
            'rotary_stability' => 'required|integer',
        ];
    }
}
