<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\CountryValidation;

use League\ISO3166\ISO3166;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Validation\Rule;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class IsValidCountryCodeAlpha3 implements Rule
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
        $countries = Arr::pluck((new ISO3166())->all(), ISO3166::KEY_ALPHA3);

        return in_array($value, $countries, true);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Country code :attribute invalid.';
    }
}
