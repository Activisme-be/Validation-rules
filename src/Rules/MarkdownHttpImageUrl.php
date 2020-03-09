<?php

namespace ActivismeBe\ValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class MarkdownHttpImageUrl
 *
 * This rule validates Markdown for non-HTTPS image links.
 *
 * @see     https://git.io/fj6Gw
 * @package ActivismeBe\ValidationRules\Rules
 */
class MarkdownHttpImageUrl implements Rule
{
     /**
     * Create a new rule instance.
     *
     * @param  User $user    The entity from the given user.
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string   $attribute The name from the attribute field.
     * @param  mixed    $value     The value from the arrtibute.
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return ! preg_match('/!\[.*\]\(http:\/\/.*\)/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return __('validationRules::messages.markdownHttpImageUrl');
    }
}
