<?php

namespace ActivismeBe\ValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Concerns\ValidatesAttributes;

/**
 * Class DoesNotContainUrl
 *
 * @see     https://git.io/fj6G5
 * @package ActivismeBe\ValidationRules\Rules
 */
class DoesNotContainUrl implements Rule
{
    use ValidatesAttributes;

    /**
     * Determine if the validation rule passes.
     *
     * @param  string   $attribute The name from the attribute field.
     * @param  mixed    $value     The value from the arrtibute.
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return ! collect(explode(' ', $value))->contains(function ($word) {
            return $this->validateRequired('word', $word) && $this->validateUrl('word', $word);
        });
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): bool
    {
        return __('validationRules::messages.doesNotContainUrlRule');
    }
}
