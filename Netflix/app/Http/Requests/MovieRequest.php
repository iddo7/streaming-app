<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
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
            'title' => 'required|min:4|max:255',
            'director_id' => ['numeric', 'min:0'],
            'producer_id' => ['numeric', 'min:0'],
            'cover' => 'required',
            'duration_minutes' => 'required',
            'annee' => 'required',
            'rating' => 'required',
            'lien_video' => 'required|url',
            'summary' => 'required'
        ];
        
        
    }

    public function messages()
    {

        return [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 4 characters.',
            'title.max' => 'The title may not be greater than 255 characters.',
            
            'director_id.min' => 'Please select a director',
            
            'producer_id.min' => 'Please select a producer',

            
            'cover.required' => 'The cover URL field is required.',
            
            'durations_minutes.required' => 'The duration in minutes field is required.',
            
            'annee.required' => 'The year field is required.',
            
            'rating.required' => 'The rating field is required.',
            
            'lien_video.required' => 'The video URL field is required.',
            'lien_video.url' => 'The video URL must be a valid URL.',
            
            'summary.required' => 'The summary field is required.'
        ];
        
    }
}
