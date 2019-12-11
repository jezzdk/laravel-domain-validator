<?php

namespace Jezzdk\Laravel\Validator;

use Illuminate\Contracts\Validation\Rule;

class DomainActive extends Domain implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return parent::passes($attribute, $value) && $this->domainIsActive($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not an active domain.';
    }

    /**
     * Test if the domain name resolves to an IP address.
     *
     * @param string $value
     * @return bool
     */
    protected function domainIsActive(string $value)
    {
        return checkdnsrr($value,'A') !== false;
    }
}
