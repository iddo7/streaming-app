<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
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
            'name' => 'required|min:4|max:255',
            'gender' => ['required', Rule::in(['male', 'female', 'hog rider hog rider', 'buggy'])],
            'birthday' => 'required|date',
            'placeOfBirth' => 'required|url',
            'pictureUrl' => 'required|min:3|max:255',
            'mainRole' => ['required', Rule::in(['actor', 'producer', 'director'])],
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'The name field is required.',
        'name.min' => 'The name must be at least 4 characters.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'gender.required' => 'The gender field is required.',
        'gender.in' => 'The selected gender is invalid.',
        'birthday.required' => 'The birthday field is required.',
        'birthday.date' => 'The birthday must be a valid date.',
        'placeOfBirth.required' => 'The place of birth field is required.',
        'placeOfBirth.url' => 'The place of birth must be a valid URL.',
        'pictureUrl.required' => 'The picture URL field is required.',
        'pictureUrl.min' => 'The picture URL must be at least 3 characters.',
        'pictureUrl.max' => 'The picture URL may not be greater than 255 characters.',
        'mainRole.required' => 'The main role field is required.',
        'mainRole.in' => 'The selected main role is invalid.',
    ];
}

}
