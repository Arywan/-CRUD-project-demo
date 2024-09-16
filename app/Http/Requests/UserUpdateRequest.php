<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->user),
            ],
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kindly fill out the name field; it is required for updates.',
            'name.string' => 'The name must be a valid text.',
            'email.required' => 'Email is mandatory for updating a user account.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already taken, please use a different one.',
            'password.min' => 'If provided, the password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match the new password.',
        ];
    }
}
