<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read \Illuminate\Http\Request $request
 */

class JobRequest extends FormRequest
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
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time','Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
            'featured' => ['required', 'boolean']
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'title' => trim($this->input('title')),
            'salary' => trim($this->input('salary')),
            'location' => trim($this->input('location')),
            'url' => trim($this->input('url')),
            'tags' => $this->input('tags') ? implode(',', array_map('trim', explode(',', $this->input('tags')))) : null,
            'featured' => $this->has('featured')
        ]);
    }
}
