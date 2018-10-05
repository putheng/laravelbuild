<?php

namespace App\Http\Requests;

use App\Rules\CurrentPassword;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePasswordFormRequest extends FormRequest
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
            'current_password' => [
                'required',
                new CurrentPassword()
            ],
            'password' => 'required|min:6|max:25|confirmed',
            'password_confirmation' => 'required'
        ];
    }
}
