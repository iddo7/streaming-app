<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'role' => ['required', Rule::in(['admin', 'normal', 'kid'])],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'firstName.required' => 'First name is required.',
            'firstName.string' => 'First name must be a string.',
            'firstName.max' => 'First name cannot be longer than 255 characters.',
            
            'lastName.required' => 'Last name is required.',
            'lastName.string' => 'Last name must be a string.',
            'lastName.max' => 'Last name cannot be longer than 255 characters.',
            
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email is already taken.',
            'email.max' => 'Email cannot be longer than 255 characters.',
            
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 6 characters.',
            
            'role.required' => 'Role is required.',
            'role.in' => 'Invalid role. Valid roles are: admin, normal, kid.',
        ];
    }
}
