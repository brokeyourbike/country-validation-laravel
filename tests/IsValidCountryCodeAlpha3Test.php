<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\MoneyValidation\Tests;

use Money\Currencies;
use BrokeYourBike\CountryValidation\IsValidCountryCodeAlpha3;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class IsValidCountryCodeAlpha3Test extends \Orchestra\Testbench\TestCase
{
    /**
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * @var Currencies
     */
    protected $currencies;

    public function setUp(): void
    {
        parent::setUp();

        /** @var \Illuminate\Validation\Factory */
        $this->validator = $this->app['validator'];
    }

    /** @test */
    public function it_will_pass_if_currency_is_valid()
    {
        $isValid = $this->validator->make(
            ['country_code' => 'USA'],
            ['country_code' => new IsValidCountryCodeAlpha3()]
        )->passes();

        $this->assertTrue($isValid);
    }

    /** @test */
    public function it_will_not_pass_if_currency_is_invalid()
    {
        $isValid = $this->validator->make(
            ['currency_code' => 'NOT-EXISTENT-COUNTRY'],
            ['currency_code' => new IsValidCountryCodeAlpha3()]
        )->passes();

        $this->assertFalse($isValid);
    }
}
