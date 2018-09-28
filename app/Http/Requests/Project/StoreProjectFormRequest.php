<?php

namespace App\Http\Requests\Project;

use App\Rules\UserProjectExists;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectFormRequest extends FormRequest
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
            'name' => [
                'required', 'min:3', 'max:30',
                new UserProjectExists(),
            ],
            'description' => 'required|min:2|max:250',
            'plan' => 'required|exists:plans,id',
            'php_version' => 'required|exists:versions,id'
        ];
    }
}
