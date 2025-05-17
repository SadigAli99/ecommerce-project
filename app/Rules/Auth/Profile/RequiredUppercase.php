<?php

namespace App\Rules\Auth\Profile;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RequiredUppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/[A-Z]/', $value)) {
            $fail('Ən azı bir böyük hərf tələb olunur');
        }
    }
}
