## Huevatar

Fetch a predefined identifier based on the provided email.

### Installation

To install this package you will need:

- Laravel 4.2+
- PHP 5.4

You must then modify your composer.json file and run composer update to include the latest version of the package in your project.

```json
"require": {
    "kevindierkx/huevatar": "0.1.*"
}
```

Or you can run the composer require command from your terminal.

```
composer require kevindierkx/huevatar:0.1.*
```

Once the package is installed you need to open ```app/config/app.php``` and register the required service provider.

```php
'providers' => [
    'Kevindierkx\ViewLocalization\ViewLocalizationServiceProvider'
]
```

Optionaly you can add the following line to your aliases.

```php
'aliases' => [
    'Huevatar'          => 'Kevindierkx\Huevatar\Huevatar',
]
```

### Usage

To fetch an identifier.

```php
Huevatar::getColor('email@example.com');
```

### Credits

- [Kevin Dierkx](https://github.com/kevindierkx)

### License

The MIT License (MIT). Please see [License File](https://github.com/kevindierkx/elicit/blob/master/LICENSE) for more information.
