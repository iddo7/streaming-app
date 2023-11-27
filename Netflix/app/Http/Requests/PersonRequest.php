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
            'pictureUrl' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'placeOfBirth' => 'required|min:3|max:255',
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
            'gender.in' => 'The selected gender is not valid. Choose from male, female, hog rider hog rider, or buggy.',
            
            'birthday.required' => 'The birthday field is required.',
            'birthday.date' => 'The birthday must be a valid date.',
            
            'pictureUrl.required' => 'The picture field is required.',
            'pictureUrl.mimes' => 'The file type for the picture was not recognized (png, jpg, gif).',
            'pictureUrl.max' => 'The file size for the picture needs to be smaller than 4Mb.',
            
            'placeOfBirth.required' => 'The place of birth field is required.',
            'placeOfBirth.min' => 'The place of birth must be at least 3 characters.',
            'placeOfBirth.max' => 'The place of birth may not be greater than 255 characters.',
            
            'mainRole.required' => 'The main role field is required.',
            'mainRole.in' => 'The selected main role is not valid. Choose from actor, producer, or director.',
        ];
    }



}
