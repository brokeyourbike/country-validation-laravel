# country-validation-laravel

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/country-validation-laravel)](https://github.com/brokeyourbike/country-validation-laravel/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/country-validation-laravel/downloads)](https://packagist.org/packages/brokeyourbike/country-validation-laravel)
[![Maintainability](https://api.codeclimate.com/v1/badges/360a121af1eb2d018cbb/maintainability)](https://codeclimate.com/github/brokeyourbike/country-validation-laravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/360a121af1eb2d018cbb/test_coverage)](https://codeclimate.com/github/brokeyourbike/country-validation-laravel/test_coverage)

Laravel country validation rules

## Installation

```bash
composer require brokeyourbike/country-validation-laravel
```

## Usage

```php
use Illuminate\Foundation\Http\FormRequest;
use BrokeYourBike\CountryValidation\IsValidCountryCodeAlpha2;
use BrokeYourBike\CountryValidation\IsValidCountryCodeAlpha3;

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

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/country-validation-laravel/blob/main/LICENSE)
