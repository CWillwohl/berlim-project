<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user.name' => ['required', 'string', 'max:255'],
            'user.email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'user.password' => ['required', 'string', 'min:8'],
            'user.password_confirmation' => ['required', 'string', 'same:user.password'],
            'address.city' => ['required', 'string', 'max:255'],
            'address.postal_code' => ['required', 'string', 'max:255'],
            'address.neighborhood' => ['required', 'string', 'max:255'],
        ];
    }
}
