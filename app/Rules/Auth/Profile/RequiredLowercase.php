<?php

namespace App\Rules\Auth\Profile;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RequiredLowercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/[a-z]/', $value)) {
            $fail('Ən azı 1 kiçik hərf tələb olunur');
        }
    }
}
