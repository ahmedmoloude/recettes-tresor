<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'libelle' => 'required|max:255|unique:actes,libelle,'.$this->id,
            'modele' => 'required',

        ];
    }
}