<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviePersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * for da w
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
            'movie_id' => ['numeric', 'min:1'],
            'person_id' => ['numeric', 'min:1'],
        ];
    }

    public function messages()
    {
        return [
            'movie_id.required' => 'The Movie field is required.',
            'movie_id.min' => 'The Movie needs to be valid',

            'person_id.required' => 'The Person field is required.',
            'person_id.min' => 'The Person needs to be valid',
        ];
    }
}
