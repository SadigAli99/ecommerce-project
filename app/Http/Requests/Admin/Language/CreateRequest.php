<?php

namespace App\Http\Requests\Admin\Language;

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
        return [
            'image' => ['required', 'image', 'mimes:png,jpg,svg,webp'],
            'name' => ['required', 'string', 'max:255', 'unique:languages,name,' . $this->route('language')],
            'short_name' => ['required', 'string', 'max:255', 'unique:languages,short_name,' . $this->route('language')],
            'is_default' => ['required', 'integer', 'in:0,1'],
        ];
    }
}
