<?php 

namespace ActivismeBe\ValidationRules\Rules; 

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

/**
 * Class MatchUserPassword 
 * 
 * @package ActivismeBe\ValidationRules\Rules
 */
class MatchUserPassword implements Rule 
{
    /**
     * The user variable. 
     * 
     * @var User
     */
    protected $user;

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
    public function passes($attribute, $value)
    {
        return Hash::check($value, $this->user->getAuthPassword());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validationRules::messages.matchUserPassword');
    }
}