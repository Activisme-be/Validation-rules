# Activisme_BE - Laravel validation rules 

This repository contains some useful Laravel validation rules. 

You can install the package via composer: 

```bash
composer require actb/laravel-validation-rules
```

**NOTE:** The package will automatically register itself. 

## Translations 

If you wish to edit the package translations, you can run the following command to publish them into your `resources/lang` folder 

```
php artisan vendor:publish --provider="ActivismeBe\ValidationRules\ValidationRulesServiceProvider"
```

## Available rules 

- [`MatchUserPassword`](#MatchUserPassword)

### `MatchUserPassword`

Determine if the given user his password match with the given password as confirmation. This could be handy when you need some form ogf extra security in a handling. 

The `MatchUserPassword` rules can be used like this: 

```php 
// in a `FormRequest`

public function rules(): array 
{
    return [
        'confirmation' => 'required', 'string', 'min:8', new MatchUserPassword($this->user())
    ];
}
```

## Changlelog 

Please see [Contributing](CONTRIBUTING.md) for details. 

# License 

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
