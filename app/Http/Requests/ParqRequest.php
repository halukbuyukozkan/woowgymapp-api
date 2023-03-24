<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParqRequest extends FormRequest
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
            'user_id'=>'required|string',
            'chronic_illness'=>'nullable|string',
            'tension'=>'required|string',
            'cardiovascular'=>'required|string',
            'chest_pain'=>'required|string',
            'spinal_cord_discomfort'=>'required|string',
            'anatomical_discomfort'=>'required|string',
            'operation'=>'required|string',
            'diabetes'=>'required|string',
            'medicine'=>'required|string',
            'supplements'=>'required|string',
            'smoke'=>'required|string',
            'addiction'=>'required|string',
            'allergy'=>'required|string',
        ];
    }
}
