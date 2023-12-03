<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class joinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'fullname' => 'required|string',
            'phone_number' => 'string|required',
            'location' => 'required|string',
            'interests' => 'required|string',
            'comments' => 'string'
        ];
    }
}
