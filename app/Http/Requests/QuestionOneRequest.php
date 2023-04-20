<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionOneRequest extends FormRequest
{
    public function rules()
    {
        return [
            'value' => 'required|numeric|max:100',
        ];
    }
}
