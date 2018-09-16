<?php

namespace App\Rules;

use App\Dosen;
use Illuminate\Contracts\Validation\Rule;

class CheckNIPDosen implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $dosen = Dosen::where('nip', $value)
            ->exists();

        if(empty($dosen)){
            return true;  
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'NIP sudah ada.';
    }
}
