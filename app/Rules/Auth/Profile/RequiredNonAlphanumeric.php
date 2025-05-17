<?php

namespace App\Rules\Auth\Profile;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RequiredNonAlphanumeric implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/[\W_]/', $value)) {
            $fail('Ən azı bir simvol tələb olunur');
        }
    }
}
