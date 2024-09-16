<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please, the user name is required. Don’t leave it empty!',
            'name.string' => 'The name should be a valid string, kindly double-check.',
            'email.required' => 'We need the email address to proceed.',
            'email.email' => 'Make sure to provide a valid email address.',
            'email.unique' => 'The email provided is already in use. Please choose another one.',
            'password.required' => 'A password is required to create an account.',
            'password.min' => 'Your password should be at least 8 characters long.',
            'password.confirmed' => 'Password confirmation does not match. Please try again.',
        ];
    }
}
