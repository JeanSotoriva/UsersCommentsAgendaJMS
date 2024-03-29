<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFormRequest extends FormRequest
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
        $id = $this->id ?? '';
        $rules = [
            
            'password' => [
                'nullable',
                'min:6',
                'max:15',
            ],
            'email' => [
                'email' => [
                    'required',
                    'email',
                    "unique:users,email,{$id},id",
                ],
            ],
            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
        ];
        return $rules;
        
    }
}
