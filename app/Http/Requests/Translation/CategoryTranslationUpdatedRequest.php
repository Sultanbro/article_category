<?php

namespace App\Http\Requests\Translation;

use Illuminate\Foundation\Http\FormRequest;

class CategoryTranslationUpdatedRequest extends FormRequest
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
            'category_id' => ['required', 'exists:App\Models\Category,id', 'integer'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'lang' => ['required', 'string', 'in:fr,it,es']
        ];
    }
}
