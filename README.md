# country-validation-laravel

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/country-validation-laravel)](https://github.com/brokeyourbike/country-validation-laravel/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/country-validation-laravel/downloads)](https://packagist.org/packages/brokeyourbike/country-validation-laravel)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/country-validation-laravel/blob/main/LICENSE)

[![Maintainability](https://api.codeclimate.com/v1/badges/360a121af1eb2d018cbb/maintainability)](https://codeclimate.com/github/brokeyourbike/country-validation-laravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/360a121af1eb2d018cbb/test_coverage)](https://codeclimate.com/github/brokeyourbike/country-validation-laravel/test_coverage)
[![tests](https://github.com/brokeyourbike/country-validation-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/country-validation-laravel/actions/workflows/tests.yml)

Validation rules for Money and Currency

## Installation

```bash
composer require brokeyourbike/country-validation-laravel
```

## Usage

```php
use Illuminate\Foundation\Http\FormRequest;
use BrokeYourBike\CountryValidation\IsValidCountryCodeAlpha2;

class ExampleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'country_alpha2' => [
                'required',
                'string',
                'size:2',
                new IsValidCountryCodeAlpha2(),
            ],
            'country_alpha3' => [
                'required',
                'string',
                'size:3',
                new IsValidCountryCodeAlpha3(),
            ],
        ];
    }
}
```

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/country-validation-laravel/blob/main/LICENSE)
