<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class AgentRequest extends FormRequest
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
                'required',
            ],
            'email' => [
                'required', 'email', Rule::unique((new User)->getTable())->ignore($this->id ?? null)
            ],
            'phone_number' => [
                'required', Rule::unique((new User)->getTable())->ignore($this->id ?? null)
            ],
            'referral_code' => [
                'nullable'
            ],
            'password' => [
                'required',
            ]
        ];
    }
}
