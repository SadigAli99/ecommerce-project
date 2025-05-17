<?php

namespace App\Http\Requests\Admin\Auth;

use App\Rules\Auth\Profile\RequiredLowercase;
use App\Rules\Auth\Profile\RequiredNonAlphanumeric;
use App\Rules\Auth\Profile\RequiredUppercase;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'min:8',new RequiredLowercase,new RequiredUppercase,new RequiredNonAlphanumeric],
            'confirm_password' => ['nullable', 'string', 'same:password'],
        ];
    }
}
