<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StrengthRequest extends FormRequest
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
            'claw_grip_strength_right_hand' => 'required|numeric',
            'claw_grip_strength_left_hand' => 'required|numeric',
            'push_up_test' => 'required|numeric',
            'wall_squat' => 'required|numeric',
            'sit_up_test' => 'required|numeric',
            'plank_test' => 'required|numeric',
        ];
    }
}
