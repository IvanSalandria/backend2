<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LanguageFormatRule implements Rule
{
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $isValid = true;
        
        $isValid =  
            isset($value['es']) &&
            isset($value['en']) &&
            isset($value['ar']) &&
            is_string($value['es']) &&
            is_string($value['en']) &&
            is_string($value['ar'])
        ;

        return $isValid;
    }

    public function message(): string 
    {
        return "The :attribute structure must be {'es': 'value', 'en': 'value', 'ar': 'value'}.";
    }
}
