<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSurveyRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            // 'user_id' => 'required',
            'rating' => 'required',
            'inspire' => 'required',
            'best_part' => 'required',
            'worst' => 'required',
            'interesting' => 'required',
            'relevant' => 'required',
            'satisfy' => 'required',
            'problem' => 'required',
            'food' => 'required',
            'food_selection' => 'required',
            'changes' => 'required',
            'thoughts' => 'required',
        ];
    }
}
