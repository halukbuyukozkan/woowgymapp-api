<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BodyfatRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'rate' => 'nullable|numeric',
            'chest' => 'nullable|numeric',
            'abdominal' => 'nullable|numeric',
            'thigh' => 'nullable|numeric',
            'bicpes' => 'nullable|numeric',
            'triceps' => 'nullable|numeric',
            'subscapular' => 'nullable|numeric',
            'suprailiac' => 'nullable|numeric',
        ];
    }
}
