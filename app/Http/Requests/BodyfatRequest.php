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
            'rate' => 'nullable|integer',
            'chest' => 'nullable|integer',
            'abdominal' => 'nullable|integer',
            'thigh' => 'nullable|integer',
            'biceps' => 'nullable|integer',
            'triceps' => 'nullable|integer',
            'subscapular' => 'nullable|integer',
            'suprailiac' => 'nullable|integer',
        ];
    }
}
