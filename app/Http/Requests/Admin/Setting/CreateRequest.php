<?php

namespace App\Http\Requests\Admin\Setting;

use App\Services\Admin\LanguageService;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        $languageService = app(LanguageService::class);
        $langs = $languageService->getLanguages();
        $rules = [
            'key' => ['required', 'string', 'max:255', 'unique:settings,key,' . $this->route('setting')],
        ];

        foreach ($langs as $lang) {
            $rules['value_' . $lang] = ['nullable', 'string', 'max:500'];
        }
        return $rules;
    }
}
