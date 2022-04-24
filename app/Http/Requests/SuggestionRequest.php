<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuggestionRequest extends FormRequest
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
            'sujet' => 'required',
            'detail'=>'required',


        ];
    }

    public function messages()
    {
        return [
            'sujet.required' => 'Ce champ ne peut pas etre vide.',
            'detail.required' => 'Ce champ ne peut pas etre vide.',
        ];
    }
}
