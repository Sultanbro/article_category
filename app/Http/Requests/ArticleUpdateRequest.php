<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'slag' => ['required', 'string'],
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'author' => ['required', 'string'],
            'main_picture' => ['required', 'string'],
            'published' => ['required', 'date_equals:date'],
        ];
    }
}
