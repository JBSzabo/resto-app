<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        $earliestTime = Carbon::createFromTimeString('11:00:00');
        $lastTime = Carbon::createFromTimeString('21:00:00');
        if (! ($pickupTime->between($earliestTime, $lastTime))) {
            $fail('Molimo odaberite vrijeme između 11:00-21:00.');
        }
    }
}
