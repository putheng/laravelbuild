<?php

namespace App\Http\Requests;

use App\Rules\SSHFormat;
use Illuminate\Foundation\Http\FormRequest;

class SSHStoreFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:199',
            'key' => [
                'required',
                new SSHFormat()
            ]
        ];
    }
}
