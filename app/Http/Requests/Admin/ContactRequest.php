<?php

namespace App\Http\Requests\Admin;

use App\Services\Admin\LanguageService;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $rules = [
            'header_logo' => ['nullable', 'image', 'mimes:png,jpg,svg,webp'],
            'footer_logo' => ['nullable', 'image', 'mimes:png,jpg,svg,webp'],
            'favicon' => ['nullable', 'image', 'mimes:png,jpg,svg,webp'],
            'wp_phone' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'map' => ['nullable', 'string'],
        ];

        $languageService = app(LanguageService::class);
        $langs = $languageService->getLanguages();

        foreach ($langs as $lang) {
            $rules['address_' . $lang] = ['nullable', 'string'];
            $rules['footer_text_' . $lang] = ['nullable', 'string'];
        }

        return $rules;
    }
}
